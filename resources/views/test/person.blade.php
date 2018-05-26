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
                <li aria-expanded="false">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        退出登录
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>

            <ul id="switcher-content" class="uk-switcher">
                <!--我的关注-->
                <li class="uk-active" aria-hidden="false">
                    @foreach($follow as $f)
                    <div class="uk-grid-width-1-1 uk-margin-top  ">
                        <a href="{{ url('article').'/'.$f->id }}">
                        <figure class="uk-overlay">
                            <img src="{{ asset($f->banner_img) }}">
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                <h3>{{ $f->title }}</h3>
                            </figcaption>
                        </figure>
                        </a>
                    </div>
                    @endforeach
                </li>
                <!--消息通知-->
                <li aria-hidden="true" class="">
                    @foreach($favorite as $f)
                        <div class="uk-grid-width-1-1 uk-margin-top  ">
                            <a href="{{ url('article').'/'.$f->article->id }}">
                                <figure class="uk-overlay">
                                    <img src="{{ asset($f->article->banner_img) }}">
                                    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
                                        <h3>{{ $f->article->title }}</h3>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @endforeach
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
                <li>

                </li>

            </ul>

        </div>
    </div>
</div>
@endsection