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
                <li aria-expanded="false">
                    <a href="#">手机拍照</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">相机拍照</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">修图技巧</a>
                </li>
            </ul>
        </div>
    </div>
    <!--文章模块-->
    <ul id="shoot-all" class="uk-switcher">
        <li>
        <div class="uk-grid-width-1-1 uk-margin-top  ">
            <figure class="uk-overlay">
                <img src="images/test.jpg">
                <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                    <h3>教你用手机拍出一张好照片</h3>
                </figcaption>
            </figure>
        </div>

        <div class="uk-grid-width-1-1 uk-margin-top  ">
            <figure class="uk-overlay">
                <img src="images/test.jpg">
                <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                    <h3>教你用手机拍出一张好照片</h3>
                </figcaption>
            </figure>
        </div>

        <div class="uk-grid-width-1-1 uk-margin-top  ">
            <figure class="uk-overlay">
                <img src="images/test.jpg">
                <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                    <h3>教你用手机拍出一张好照片</h3>
                </figcaption>
            </figure>
        </div>
        </li>

        <li id="shoot">
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>AAA教你用手机拍出一张好照片</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>BBB教你用手机拍出一张好照片</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>CCC教你用手机拍出一张好照片</h3>
                    </figcaption>
                </figure>
            </div>
        </li>
    </ul>
    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
@endsection