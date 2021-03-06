
<html>
<head>
    <meta charset="UTF-8">
    <title>后台</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/uikit.gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/components/search.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/components/upload.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/components/notify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/components/htmleditor.gradient.css')}}">

    <script src="{{ asset('lib/uikit/js/components/Jquery2.0.js') }}"></script>
    <script src="{{ asset('lib/uikit/js/uikit.js') }}"></script>
    {{--<script src="{{ asset('lib/Jquery3.3.1.js') }}"></script>--}}

    <script src="{{ asset('lib/uikit/js/components/upload.js') }}"></script>
    <script src="{{ asset('lib/uikit/js/components/notify.js') }}"></script>
    <script src="{{ asset('lib/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{ asset('lib/codemirror/mode/markdown/markdown.js')}}"></script>
    <script src="{{ asset('lib/codemirror/addon/mode/overlay.js')}}"></script>
    <script src="{{ asset('lib/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{ asset('lib/codemirror/mode/gfm/gfm.js')}}"></script>
    <script src="{{ asset('lib/marked-master/marked.min.js')}}"></script>
    <script src="{{ asset('lib/uikit/js/components/htmleditor.js')}}" type="text/javascript" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom "> <!--容器-->

    <!--导航栏-->
    <nav class="uk-navbar uk-margin-bottom">  <!--导航栏-->
        <a class="uk-navbar-brand uk-hidden-small" href="{{ url('index')}}">前台</a>
        <ul class="uk-navbar-nav uk-hidden-small">

            <li @if('index' == $action) class="uk-active" @endif >
                <a href="{{ url('admin/index')}}">管理文章</a>
            </li>
            <li @if('add' == $action) class="uk-active" @endif>
                <a href="{{ url('admin/add')}}">新建文章</a>
            </li>
            <li @if('draft' == $action) class="uk-active" @endif>
                <a href="{{ url('admin/draft') }}">草稿箱</a>
            </li>
            <li @if('user' == $action) class="uk-active" @endif>
                <a href="{{ url('admin/user')}}">用户管理</a>
            </li>
        </ul>
        <div class="uk-navbar-flip">

            <a href="" class="uk-navbar-toggle uk-navbar-toggle-alt uk-visible-small"></a>

            <ul class="uk-navbar-nav uk-hidden-small">
                <li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
                    <a href="">欢迎 {{ Auth::guard('admin')->user()->name }}</a>

                    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0px;">
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href="{{ url('admin/logout') }}">退出</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    @yield('content')

    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
</body>

</html>