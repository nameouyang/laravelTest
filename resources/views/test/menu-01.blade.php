@extends('layouts.home')

@section('content')
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <!--切换导航-->
    <div class="uk-grid">
        <div class="uk-width-1-1 uk-row-first">
            <ul class="uk-subnav uk-subnav-pill " data-uk-switcher="{connect:'#app-all'}">
                <li class="uk-active " aria-expanded="true">
                    <a href="#">全部</a>
                </li>
                <li aria-expanded="false">
                    <a href="#" >IOS</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">Android</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">Windows</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">Mac</a>
                </li>
            </ul>
        </div>
    </div>
    <!--全部文章-->
    <ul id="app-all" class="uk-switcher">
        <li id="app-ios">
            <div class="uk-grid-width-1-1 uk-margin-top ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>

            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>

            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>AAA简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>BBB简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>CCC简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>
        </li>

        <li>
            <div class="uk-grid-width-1-1 uk-margin-top  ">
                <figure class="uk-overlay">
                    <img src="images/test.jpg">
                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                        <h3>DDD简易Markdown编辑器</h3>
                    </figcaption>
                </figure>
            </div>
        </li>
 </ul>

    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
@endsection