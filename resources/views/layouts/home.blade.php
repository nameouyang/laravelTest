
<html>
<head>
    <title>Banner @yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/uikit.gradient.css">
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/components/search.css">
    <script src="lib/uikit/js/components/Jquery2.0.js"></script>
    <script src="lib/uikit/js/uikit.js" type="text/javascript" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!--导航栏-->
<nav class="uk-navbar uk-margin-bottom">
    <a class="uk-navbar-brand uk-hidden-small" href="index.html">Brand</a>
    <ul class="uk-navbar-nav uk-hidden-small">
        <li class="uk-active">
            <a href="{{ url('index/') }}">内容广场</a>
        </li>
        <li>
            <a href="{{ url('menu1/') }}">软件使用</a>
        </li>
        <li>
            <a href="{{ url('menu2/') }}">摄影技巧</a>
        </li>
        <li>
            <a href="{{ url('menu3/') }}">智能设备</a>
        </li>
        <li>
            <a href="{{ url('menu4/') }}">生活方式</a>
        </li>
        <li>
            <a href="{{ url('person/') }}">个人中心</a>
        </li>
    </ul>
    <div class="uk-navbar-flip">
        <div class="uk-navbar-content">
            @if(Auth::check())
                <a class="uk-icon-small uk-icon-user uk-link-muted" href="{{ url('person') }}"> </a>
            @else
                <a class="uk-icon-small uk-icon-user uk-link-muted" href="{{ url('person') }}"> </a>
            @endif

        </div>
    </div>
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small" id="brand">Brand</div>
</nav>

    @yield('content')

<!--分隔线-->
<hr class="uk-grid-divider">
<!-- 侧边导航-->
<div id="offcanvas" class="uk-offcanvas ">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
            <li class="uk-active">
                <a href="{{ url('index/') }}">内容广场</a>
            </li>
            <li>
                <a href="{{ url('menu1/') }}">软件使用</a>
            </li>
            <li>
                <a href="{{ url('menu2/') }}">摄影技巧</a>
            </li>
            <li>
                <a href="{{ url('menu3/') }}">智能设备</a>
            </li>
            <li>
                <a href="{{ url('menu4/') }}">生活方式</a>
            </li>
            <li>
                <a href="{{ url('person/') }}">个人中心</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>