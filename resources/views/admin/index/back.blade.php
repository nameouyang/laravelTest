@extends('layouts.back')

@section('content')
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
                        <th class="uk-width-1-10">
                            <div class="uk-form-select  uk-active " data-uk-form-select>
                                <select>
                                    <option value="1">全部栏目</option>
                                    <option value="2">iOS软件</option>
                                    <option value="3">Android</option>
                                    <option value="4">Mac软件</option>
                                    <option value="5">Win应用</option>
                                </select>
                            </div>
                        </th>
                        <th class="uk-width-1-10">文章主题</th>
                        <th class="uk-width-1-10">点赞数</th>
                        <th class="uk-width-1-10">收藏数</th>
                        <th class="uk-width-1-10">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>1001</td>
                        <td>LookUp：每天一张精美设计的卡片，让背单词这事更有趣</td>
                        <td>iOS软件</td>
                        <td>软件使用</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>LookUp：每天一张精美设计的卡片，让背单词这事更有趣</td>
                        <td>iOS软件</td>
                        <td>软件使用</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>LookUp：每天一张精美设计的卡片，让背单词这事更有趣</td>
                        <td>iOS软件</td>
                        <td>软件使用</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                </table>

                <div>
                    <!--分隔线-->
                    <hr class="uk-grid-divider">
                    <!--分页按钮-->
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>

            </li>
            <!--摄影技巧-->
            <li>
                <table class="uk-table uk-table-striped uk-table-hover ">
                    <thead>
                    <tr>
                        <th class="uk-width-1-10">文章ID</th>
                        <th class="uk-width-4-10">文章标题</th>
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
                        <th class="uk-width-1-10">文章主题</th>
                        <th class="uk-width-1-10">点赞数</th>
                        <th class="uk-width-1-10">收藏数</th>
                        <th class="uk-width-1-10">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>2001</td>
                        <td>教你用手机拍出一张好照片</td>
                        <td>手机摄影</td>
                        <td>摄影技巧</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2001</td>
                        <td>教你用手机拍出一张好照片</td>
                        <td>手机摄影</td>
                        <td>摄影技巧</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                </table>

                <div>
                    <!--分隔线-->
                    <hr class="uk-grid-divider">
                    <!--分页按钮-->
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>

            </li>
            <!--智能设备-->
            <li>
                <table class="uk-table uk-table-striped uk-table-hover ">
                    <thead>
                    <tr>
                        <th class="uk-width-1-10">文章ID</th>
                        <th class="uk-width-4-10">文章标题</th>
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
                        <th class="uk-width-1-10">文章主题</th>
                        <th class="uk-width-1-10">点赞数</th>
                        <th class="uk-width-1-10">收藏数</th>
                        <th class="uk-width-1-10">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>3001</td>
                        <td>homepod使用评测</td>
                        <td>影音器材</td>
                        <td>智能设备</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                </table>

                <div>
                    <!--分隔线-->
                    <hr class="uk-grid-divider">
                    <!--分页按钮-->
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>

            </li>

            <!--生活方式-->
            <li>
                <table class="uk-table uk-table-striped uk-table-hover ">
                    <thead>
                    <tr>
                        <th class="uk-width-1-10">文章ID</th>
                        <th class="uk-width-4-10">文章标题</th>
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
                        <th class="uk-width-1-10">文章主题</th>
                        <th class="uk-width-1-10">点赞数</th>
                        <th class="uk-width-1-10">收藏数</th>
                        <th class="uk-width-1-10">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>4001</td>
                        <td>五月电影片单</td>
                        <td>电影</td>
                        <td>生活方式</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                </table>

                <div>
                    <!--分隔线-->
                    <hr class="uk-grid-divider">
                    <!--分页按钮-->
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
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
                        <th class="uk-width-1-10">文章栏目</th>
                        <th class="uk-width-1-10">文章主题</th>
                        <th class="uk-width-1-10">点赞数</th>
                        <th class="uk-width-1-10">收藏数</th>
                        <th class="uk-width-1-10">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>1007</td>
                        <td>五月电影片单</td>
                        <td>电影</td>
                        <td>生活方式</td>
                        <td>6</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button-success">修改</button>
                        </td>
                    </tr>
                </table>

                <div>
                    <!--分隔线-->
                    <hr class="uk-grid-divider">
                    <!--分页按钮-->
                    <ul class="uk-pagination">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection