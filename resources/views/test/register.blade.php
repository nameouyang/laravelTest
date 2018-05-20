<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>欢迎登录</title>
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/uikit.gradient.css">
    <script src="lib/uikit/js/components/Jquery2.0.js"></script>
    <script src="lib/uikit/js/uikit.js" type="text/javascript" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <!--导航栏-->
    <nav class="uk-navbar uk-margin-bottom">
        <a class="uk-navbar-brand uk-hidden-small" href="index.html">Brand</a>
        <ul class="uk-navbar-nav uk-hidden-small">
        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
    </nav>
    <!--居中显示-->
    <div class="uk-vertical-align uk-text-center uk-height-1-1">
        <!--注册-->
        <div class="uk-vertical-align-middle" style="width: 300px;">
            <img class="uk-margin-bottom" width="140" src="images/touxiang.jpg">
            <form class="uk-panel uk-panel-box uk-form">
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" type="text" placeholder="用户名（字母及数字组合）">
                </div>
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" type="text" placeholder="个人邮箱">
                </div>
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" type="password" placeholder="密码（长度不低于六位）">
                </div>
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" type="password" placeholder="确认密码">
                </div>
                <div class="uk-form-row">
                    <a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="#">立刻注册</a>
                </div>
            </form>
        </div>

    </div>

    <div id="offcanvas" class="uk-offcanvas"> <!-- 侧边导航-->
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <li>
                    <a href="index.html">内容广场</a>
                </li>
                <li>
                    <a href="menu-01.html">软件使用</a>
                </li>
                <li>
                    <a href="menu-02.html">摄影技巧</a>
                </li>
                <li>
                    <a href="menu-03.html">智能设备</a>
                </li>
                <li>
                    <a href="menu-04.html">生活方式</a>
                </li>
                <li>
                    <a href="admin.html">个人中心</a>
                </li>
            </ul>
        </div>
    </div>

</div>
</body>

</html>
