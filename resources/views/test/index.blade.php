@extends('layouts.home')

@section('content')
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom ">

    <!--首页入口-->
    <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-1 uk-margin-small-bottom">
            <a href="follow.html">   {{--跳转到关注--}}
                <img src="images/banner.jpg">
            </a>
        </div>
        <div class="uk-width-1-2 uk-margin-small-bottom">
            <a href="{{ url('menu1') }}">
                <img src="images/ban-1.jpg">
            </a>
        </div>
        <div class="uk-width-1-2 uk-margin-small-bottom">
            <a href="{{ url('menu2') }}">
                <img src="images/ban-2.jpg">
            </a>
        </div>
        <div class="uk-width-1-2 ">
            <a href="{{ url('menu3') }}">
                <img src="images/ban-3.jpg">
            </a>
        </div>
        <div class="uk-width-1-2 ">
            <a href="{{ url('menu4') }}">
                <img src="images/ban-4.jpg">
            </a>
        </div>
    </div>

    <!--文章瀑布-->
    <div class="uk-grid"  data-uk-grid-margin="">
        <div class="uk-width-medium-1-2">
            <a href="{{url('article')}}">
                <img width="600" height="400" src="images/test.jpg">
            </a>
        </div>
        <div class="uk-width-medium-1-2">
            <a style="text-decoration: none" href="{{url('article')}}"><h2>LookUp：每天一张精美设计的卡片，让背单词这件事更有趣</h2></a>
            <p class="uk-text-muted">在学习英语的过程中，词汇量一直是非常重要的一个环节。但面对陌生的英语单词，我们似乎很容易对其感到厌烦。要搞清楚单词之间细微的差异，绝非易事。</p>
            <!--分类+ 点赞收藏-->
            <div>
                <span>#ios软件</span>
                <span class="uk-align-right uk-margin-small-right">
                    <span class="uk-icon-thumbs-o-up " style="margin-right: 6px;"></span>6
                    <span style="margin-right: 6px;"></span>
                    <span class="uk-icon-star-o uk-margin-small-left" style="margin-right: 6px;"></span>8
                </span>
            </div>
        </div>
    </div>

    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
@endsection

