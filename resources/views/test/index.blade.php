@extends('layouts.home')

@section('content')
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom ">

    <!--首页入口-->
    <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-1 uk-margin-small-bottom">
            <a href="{{ url('follow') }}">   {{--跳转到关注--}}
                <img src="{{ asset('images/banner.jpg') }}">
            </a>
        </div>
        <div class="uk-width-1-2 uk-margin-small-bottom">
            <a href="{{ url('menu1') }}">
                <img src="{{ asset('images/ban-1.jpg') }}">
            </a>
        </div>
        <div class="uk-width-1-2 uk-margin-small-bottom">
            <a href="{{ url('menu2') }}">
                <img src="{{ asset('images/ban-2.jpg') }}">
            </a>
        </div>
        <div class="uk-width-1-2 ">
            <a href="{{ url('menu3') }}">
                <img src="{{ asset('images/ban-3.jpg') }}">
            </a>
        </div>
        <div class="uk-width-1-2 ">
            <a href="{{ url('menu4') }}">
                <img src="{{ asset('images/ban-4.jpg') }}">
            </a>
        </div>
    </div>

    <!--文章瀑布-->
    @foreach($articles as $article)
    <div class="uk-grid"  data-uk-grid-margin="">
        <div class="uk-width-small-1-2">
            <a href="{{ url('article').'/'.$article->id }}">
                <img width="600" height="400" src="{{ $article->banner_img }}">
            </a>
        </div>
        <div class="uk-width-small-1-2">
            <a style="text-decoration: none" href="{{ url('article').'/'.$article->id }}">
                <h2>{{ $article->title }}</h2>
            </a>
            <p class="uk-text-muted">{{ $article->abstract }}</p>
            <!--分类+ 点赞收藏-->
            <div>
                <span>{{ $article->articleColumn->name }}</span>
                <span class="uk-align-right uk-margin-small-right">
                    <span class="uk-icon-thumbs-o-up " style="margin-right: 6px;"></span>{{ $article->thumbs_up }}
                    <span style="margin-right: 6px;"></span>
                    <span class="uk-icon-star-o uk-margin-small-left" style="margin-right: 6px;"></span>{{ $article->favorite }}
                </span>
            </div>
        </div>
    </div>
        <hr class="uk-grid-divider">
    @endforeach
    <!--分隔线-->

</div>
@endsection

