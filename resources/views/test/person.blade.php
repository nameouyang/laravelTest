@extends('layouts.home')

@section('content')
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <!--小导航-->
    <div class="uk-grid">
        <div class="uk-width-1-1 ">
            <ul class="uk-subnav uk-subnav-pill " data-uk-switcher="{connect:'#switcher-content'}">
                <li aria-expanded="true">
                    <a href="#">我的关注</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">我的收藏</a>
                </li>
                <li aria-expanded="false">
                    <a href="#">账号设置</a>
                </li>
            </ul>

            <ul id="switcher-content" class="uk-switcher">
                <!--我的关注-->
                <li class="uk-active" aria-hidden="false">
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
                                <h3>手机拍照技巧</h3>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="uk-grid-width-1-1 uk-margin-top  ">
                        <figure class="uk-overlay">
                            <img src="images/test.jpg">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>homepod智能音箱评测</h3>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <!--消息通知-->
                <li aria-hidden="true" class="">
                    <div class="uk-grid-width-1-1 uk-margin-top  ">
                        <figure class="uk-overlay">
                            <img src="images/test.jpg">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>11简易Markdown编辑器</h3>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="uk-grid-width-1-1 uk-margin-top  ">
                        <figure class="uk-overlay">
                            <img src="images/test.jpg">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>22手机拍照技巧</h3>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="uk-grid-width-1-1 uk-margin-top  ">
                        <figure class="uk-overlay">
                            <img src="images/test.jpg">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>33homepod智能音箱评测</h3>
                            </figcaption>
                        </figure>
                    </div>
                </li>

                <li aria-hidden="true" class="">
                    <!--个人设置-->
                    <div class="uk-panel uk-panel-header">

                        <h1 class="uk-panel-title uk-text-bold">修改基础资料</h1>

                        <form class="uk-form uk-form-stacked">

                            <div class="uk-form-row">
                                <label class="uk-form-label">昵称</label>
                                <div class="uk-form-controls">
                                    <input type="text" placeholder="" class="uk-width-1-1" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="uk-form-row">
                                <label class="uk-form-label">密码</label>
                                <div class="uk-form-controls">
                                    <input type="password" placeholder="" class="uk-width-1-1" value="{{substr($user->password, 0,10)}}">
                                </div>
                            </div>

                            <div class="uk-form-row">
                                <label class="uk-form-label">邮箱</label>
                                <div class="uk-form-controls">
                                    <input type="text" placeholder="" class="uk-width-1-1" value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="uk-form-row">
                                <div class="uk-form-controls">
                                    <button type="submit" class="uk-button uk-button-primary">确认提交</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>
@endsection