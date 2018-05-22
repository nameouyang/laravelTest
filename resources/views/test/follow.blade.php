<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>关注专栏</title>
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/uikit.gradient.css">
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/components/search.css">
    <script src="lib/uikit/js/components/Jquery2.0.js"></script>
    <script src="lib/uikit/js/uikit.js" type="text/javascript" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--容器-->
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom ">
    <!--导航栏-->
    <nav class="uk-navbar uk-margin-bottom">
        <a class="uk-navbar-brand uk-hidden-small" href="index.html">Brand</a>
        <ul class="uk-navbar-nav uk-hidden-small">
            <li class="uk-active">
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
                <a href="menu-04.html">数字生活</a>
            </li>
            <li>
                <a href="admin.html">个人中心</a>
            </li>
        </ul>
        <div class="uk-navbar-flip">
            <div class="uk-navbar-content">
                <a class="uk-icon-small uk-icon-user uk-link-muted" href="login.html"> </a>
            </div>
        </div>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small" id="brand">Brand</div>
    </nav>
    <!--首页分类-->
    <div class="uk-grid ">
        <!--模块-->
        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="{{ url('menu1') }}/ios">
                <img src="images/fo-1.jpg">
            </a>
            <p class="uk-h2 uk-margin-top-remove ">#IOS软件</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>

        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="{{ url('menu1') }}/android">
                <img src="images/fo-1.jpg">
            </a>
            <p class="uk-h2 uk-margin-top-remove ">#Android应用</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>

        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="{{ url('menu1') }}/mac">
                <img src="images/fo-1.jpg">
            </a>
            <p class="uk-h2 uk-margin-top-remove ">#Mac系统</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="{{ url('menu1') }}/win">
                <img src="images/fo-1.jpg">
            </a>
            <p class="uk-h2 uk-margin-top-remove ">#Win系统</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="menu-02.html#shoot">
                <img src="images/fo-2.jpg">
            </a>

            <p class="uk-h2 uk-margin-top-remove ">#手机评测</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-3.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#手机拍照</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-2.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#影音器材</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-3.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#相机拍照</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-2.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#数码周边</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-3.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#修图技巧</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-4.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#游戏</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-4.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#电影</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-4.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#音乐</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>
        <div  class="uk-width-1-2 uk-margin-bottom">
            <img src="images/fo-4.jpg">
            <p class="uk-h2 uk-margin-top-remove ">#家装</p>
            <span class="uk-text-muted">13篇文章</span>
            <button class="uk-button uk-button-small uk-align-right">关注栏目</button>
        </div>






    </div>

    <!-- 侧边导航-->
    <div id="offcanvas" class="uk-offcanvas ">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <li class="uk-active">
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
