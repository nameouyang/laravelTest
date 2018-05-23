@extends('layouts.home')

@section('content')
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <!--二级导航-->
    <div class="uk-grid">
        <div class="uk-width-1-1 uk-row-first">
            <ul class="uk-subnav uk-subnav-pill " data-uk-switcher="{connect:'#shoot-all'}">
                <li class="uk-active " aria-expanded="true">
                    <a href="#">全部</a>
                </li>
                @foreach($articleColumns as $articleColumn)
                    <li aria-expanded="false">
                        <a href="#" >{{ $articleColumn->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章模块-->
    <ul id="shoot-all" class="uk-switcher">
        <li>
            @foreach($articles as $article)
                <div class="uk-grid-width-1-1 uk-margin-top ">
                    <figure class="uk-overlay">
                        <a href="{{ url('article').'/'.$article->id }}">
                            <img src="{{ asset($article->banner_img) }}">
                        </a>
                        <a href="{{ url('article').'/'.$article->id }}">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>{{ $article->title }}</h3>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            @endforeach

        </li>

        @foreach($articleColumns as $key => $articleColumn)
            <?php $i=0;?>
                    <li>
                        @foreach($articles as $article)
                            @if ($article->article_column_id == $articleColumn->id)
                        <div class="uk-grid-width-1-1 uk-margin-top  ">
                            <figure class="uk-overlay">
                                <a href="{{ url('article').'/'.$article->id }}"><img src="{{ asset($article->banner_img) }}"></a>
                                <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                    <h3>{{ $article->title }}</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <a href="#" data-uk-switcher-item="{{ $key+1 }}" id="{{ $articleColumn->name }}"></a>
                                <?php $i = 1; ?>
                            @endif
                        @endforeach
                    </li>

            @if($i==0)
                <li>
                    <div class="uk-grid-width-1-1 uk-margin-top  ">

                    </div>
                    <a href="#" data-uk-switcher-item="{{ $articleColumn->id }}" id="{{ $articleColumn->name }}"></a>
                </li>
            @endif
        @endforeach
    </ul>
    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
<script>
    var type = '{{ $type }}';
    window.onload = function() {
        $('#'+type).click();
    }

</script>
@endsection