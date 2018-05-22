
@extends('layouts.home')
@section('content')
    <div class="uk-grid">
        <div class="uk-width-medium-1-1">
            <article class="uk-article uk-text-large">
                <img src="{{ asset($article->banner_img) }}">
                <h2>
                    {{ $article->title }}
                </h2>
                <!--分类+ 点赞收藏-->
                <div class="uk-text-muted">
                    <span>{{ $article->articleColumn->name }}</span>
                    <span class="uk-align-right uk-margin-small-right">
                    <span class="uk-icon-thumbs-o-up " style="margin-right: 6px;"></span>{{ $article->thumbs_up }}
                    <span style="margin-right: 6px;"></span>
                    <span class="uk-icon-star-o uk-margin-small-left" style="margin-right: 6px;"></span>{{ $article->favorite }}
                </span>
                </div>
                {!! $article->content !!}
                <hr class="uk-grid-divider">

                <button class="uk-button uk-button-danger" @if(!empty($article->articleThumbsUp->id) || !Auth::check())) disabled @endif id="favor" >点赞</button>
                @if(!empty($article->articleThumbsUp->id) || !Auth::check())
                    <button class="uk-button uk-button-primary"  id="favoriteCancel">取消收藏</button>
                @else
                    <button class="uk-button uk-button-primary" @if(!Auth::check()) disabled @endif id="favorite">添加收藏</button>
                @endif
                    <a class="uk-button uk-align-right " data-uk-smooth-scroll="">回到顶部</a>
                </p>
            </article>
        </div>
    </div>
</div>

</div>

@endsection
<script>
    window.onload = function () {
        $('#favor').click(function (e) {
            e.preventDefault();
            var data = {{ $article->id }}
            $.post('/favor',{data:data},function (result) {
                if (200 == result.code) {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'success', pos:'top-right', timeout: 3000});
                    location.reload();
                } else {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'danger', pos:'top-right', timeout: 3000});
                    location.reload();
                }
            });
        });

        $('#favorite').click(function (e) {
            e.preventDefault();
            var data = {{ $article->id }}
            $.post('/favorite',{data:data},function (result) {
                if (200 == result.code) {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'success', pos:'top-right', timeout: 3000});
                    location.reload();
                } else {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'danger', pos:'top-right', timeout: 3000});
                    location.reload();
                }
            });
        });

        $('#favoriteCancel').click(function (e) {
            e.preventDefault();
            var data = {{ $article->id }}
            $.post('/favoriteCancel',{data:data},function (result) {
                if (200 == result.code) {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'success', pos:'top-right', timeout: 3000});
                    location.reload();
                } else {
                    //UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'danger', pos:'top-right', timeout: 3000});
                    location.reload();
                }
            });
        });
    };
</script>