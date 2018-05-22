<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/uikit.gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit/css/components/search.css')}}">
    <script src="{{ asset('lib/uikit/js/components/Jquery2.0.js')}}"></script>

    <script src="{{ asset('lib/uikit/js/uikit.js')}}" type="text/javascript" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom "> <!--容器-->
    <nav class="uk-navbar uk-margin-bottom">  <!--导航栏-->
        <a class="uk-navbar-brand uk-hidden-small" href="{{ url('index') }}">前台</a>
        <ul class="uk-navbar-nav uk-hidden-small">
            <li @if('index' == $action) class="uk-active" @endif >
                <a href="{{ url('admin/index')}}">管理文章</a>
            </li>
            <li @if('add' == $action) class="uk-active" @endif>
                <a href="{{ url('admin/add')}}">新建文章</a>
            </li>
            <li @if('user' == $action) class="uk-active" @endif>
                <a href="{{ url('admin/user')}}">用户管理</a>
            </li>
        </ul>
    </nav>


<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom ">
    <div class="uk-grid uk-grid-medium" data-uk-grid-margin="">
        <!--左侧1／6-->
        <div class="uk-width-medium-1-6">
            <div class="uk-sticky-placeholder " style="height: 600px; margin: 0px;">
                <div class="uk-panel uk-panel-box" data-uk-sticky="{top:35}" style="margin: 0px;">
                    <ul class="uk-nav uk-nav-side " data-uk-switcher="{connect:'#good'}">
                        <li class="uk-active" aria-expanded="true"><a href="#">1软件使用</a></li>
                        <li class="" aria-expanded="false"><a href="#">2摄影技巧</a></li>
                        <li class="" aria-expanded="false"><a href="#">3智能设备</a></li>
                        <li class="" aria-expanded="false"><a href="#">4生活方式</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class=""><a href="#faq">所有已发文章</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--右侧列表5／6-->
        <div class="uk-width-medium-5-6 uk-row-first">
            <!--文章列表表单-->
            <ul id="good" class="uk-switcher">
                <li class="uk-active">
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">
                                <div class="uk-form-select  uk-active " data-uk-form-select>
                                    <select>
                                        <option value="0">全部栏目</option>
                                        <option value="1">iOS软件</option>
                                        <option value="2">Android</option>
                                        <option value="3">Mac软件</option>
                                        <option value="4">Win应用</option>
                                    </select>
                                </div>
                            </th>
                            <th class="uk-width-1-10">点赞数</th>
                            <th class="uk-width-1-10">收藏数</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article[0] as $item => $art)
                            @if(1 == $art->article_type_id)
                        <tr>
                            <td>{{ $art->id }}</td>
                            <td>{{ $art->title }}</td>
                            <td>{{ $art->articleType->name }}</td>
                            <td>{{ $art->articleColumn->name }}</td>
                            <td>{{ $art->thumbs_up }}</td>
                            <td>{{ $art->favorite }}</td>
                            <td>
                                <button class="uk-button-success">修改</button>
                            </td>
                        </tr>
                            @endif
                            @endforeach
                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {!! $article[0]->links() !!}
                    </div>

                </li>
                <!--摄影技巧-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">
                                <div class="uk-form-select  uk-active " data-uk-form-select>
                                    <select>
                                        <option value="1">全部栏目</option>
                                        <option value="2">手机拍照</option>
                                        <option value="3">相机拍照</option>
                                        <option value="4">修图技巧</option>
                                    </select>
                                </div>
                            </th>
                            <th class="uk-width-1-10">点赞数</th>
                            <th class="uk-width-1-10">收藏数</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article[1] as $art)
                        <tr>
                            <td>{{ $art->id }}</td>
                            <td>{{ $art->title }}</td>
                            <td>{{ $art->articleType->name }}</td>
                            <td>{{ $art->articleColumn->name }}</td>
                            <td>{{ $art->thumbs_up }}</td>
                            <td>{{ $art->favorite }}</td>
                            <td>
                                <button class="uk-button-success">修改</button>
                            </td>
                        </tr>
                            @endforeach
                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {!! $article[1]->links() !!}
                    </div>

                </li>
                <!--智能设备-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">
                                <div class="uk-form-select  uk-active " data-uk-form-select>
                                    <select>
                                        <option value="1">全部栏目</option>
                                        <option value="2">手机评测</option>
                                        <option value="3">影音器材</option>
                                        <option value="4">数码周边</option>
                                    </select>
                                </div>
                            </th>
                            <th class="uk-width-1-10">点赞数</th>
                            <th class="uk-width-1-10">收藏数</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article[2] as $art)
                        <tr>
                            <td>{{ $art->id }}</td>
                            <td>{{ $art->title }}</td>
                            <td>{{ $art->articleType->name }}</td>
                            <td>{{ $art->articleColumn->name }}</td>
                            <td>{{ $art->thumbs_up }}</td>
                            <td>{{ $art->favorite }}</td>
                            <td>
                                <button class="uk-button-success">修改</button>
                            </td>
                        </tr>
                            @endforeach
                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {!! $article[2]->links() !!}
                    </div>

                </li>

                <!--生活方式-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">
                                <div class="uk-form-select  uk-active " data-uk-form-select>
                                    <select>
                                        <option value="1">全部栏目</option>
                                        <option value="2">游戏</option>
                                        <option value="3">电影</option>
                                        <option value="4">音乐</option>
                                        <option value="5">家装</option>
                                    </select>
                                </div>
                            </th>
                            <th class="uk-width-1-10">点赞数</th>
                            <th class="uk-width-1-10">收藏数</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article[3] as $art)
                        <tr>
                            <td>{{ $art->id }}</td>
                            <td>{{ $art->title }}</td>
                            <td>{{ $art->articleType->name }}</td>
                            <td>{{ $art->articleColumn->name }}</td>
                            <td>{{ $art->thumbs_up }}</td>
                            <td>{{ $art->favorite }}</td>
                            <td>
                                <button class="uk-button-success">修改</button>
                            </td>
                        </tr>
                            @endforeach

                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {{--<ul class="uk-pagination">
                            <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                            <li class="uk-active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><span>...</span></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                        </ul>--}}
                        {!! $article[3]->links() !!}

                    </div>

                </li>

                <li></li>

                <!--所有已发文章-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">文章栏目</th>
                            <th class="uk-width-1-10">点赞数</th>
                            <th class="uk-width-1-10">收藏数</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article[4] as $art)
                        <tr>
                            <td>{{ $art->id }}</td>
                            <td>{{ $art->title }}</td>
                            <td>{{ $art->articleType->name }}</td>
                            <td>{{ $art->articleColumn->name }}</td>
                            <td>{{ $art->thumbs_up }}</td>
                            <td>{{ $art->favorite }}</td>
                            <td>
                                <button class="uk-button-success">修改</button>
                            </td>
                        </tr>
                            @endforeach
                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {!! $article[4]->links() !!}
                    </div>

                </li>


            </ul>

        </div>

    </div>
    <!--分隔线-->
    <hr class="uk-grid-divider">
</div>
</div>
