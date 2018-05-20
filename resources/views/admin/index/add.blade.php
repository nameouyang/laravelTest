
    @extends('layouts.back')

    @section('content')

    <div class="uk-grid uk-grid-medium" data-uk-grid-margin="">
        <!--左侧1／6-->
        <div class="uk-width-medium-1-6">
            <div class="uk-sticky-placeholder " style="height: 600px; margin: 0px;">
                <div class="uk-panel uk-panel-box" data-uk-sticky="{top:35}" style="margin: 0px;">
                    <ul class="uk-nav uk-nav-side " data-uk-switcher="{connect:'#good'}">
                        <li class="uk-active" aria-expanded="true"><a href="#"> 创建文章</a></li>
                        <li class="" aria-expanded="false"><a href="#">草稿箱</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--右侧列表5／6-->
        <div class="uk-width-medium-5-6 uk-row-first">
            <!--表单-->
            <ul id="good" class="uk-switcher">
                <!--新建文章-->
                <li>
                    <!--水平布局-->
                    <form class="uk-form uk-form-horizontal" method="POST" action="{{ url('/admin/test') }}">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <!--设置文章标题-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it">文章标题</label>
                            <div class="uk-form-controls">
                                <input type="text" name="title" id="form-h-it" style="width: 380px;" placeholder="标题限长25字">
                            </div>
                        </div>
                        <!--设置文章主题-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="first">文章主题</label>
                            <div class="uk-form-controls">
                                <select id="first" onchange="change()" name="zhuti">
                                    <option selected="selected" value="1">软件使用</option>
                                    <option value="2">摄影技巧</option>
                                    <option value="3">智能设备</option>
                                    <option value="4">生活方式</option>
                                </select>
                            </div>
                        </div>
                        <!--设置文章栏目-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="second">文章栏目</label>
                            <div class="uk-form-controls">
                                <select id="second" name="lanmu">
                                    <option value="1">iOS</option>
                                    <option value="2">Android</option>
                                    <option value="3">Mac</option>
                                    <option value="4">Win</option>
                                </select>
                                <!--两个下拉菜单-->
                                <script>
                                    function change() {
                                        var x = document.getElementById("first");
                                        var y = document.getElementById("second");
                                        y.options.length = 0; // 清除second下拉框的所有内容
                                        if (x.selectedIndex == 0) {
                                            y.options.add(new Option("iOS", "0", false, true)); // 默认选中
                                            y.options.add(new Option("Android", "1"));
                                            y.options.add(new Option("Mac", "2"));
                                            y.options.add(new Option("Win", "3"));
                                        }

                                        if (x.selectedIndex == 1) {
                                            y.options.add(new Option("手机拍照", "0", false, true));// 默认选中
                                            y.options.add(new Option("相机拍照", "1"));
                                            y.options.add(new Option("修图技巧", "2"));
                                        }

                                        if (x.selectedIndex == 2) {
                                            y.options.add(new Option("手机评测", "0", false, true));// 默认选中
                                            y.options.add(new Option("影音器材", "1"));
                                            y.options.add(new Option("数码周边", "2"));
                                        }

                                        if (x.selectedIndex == 3) {
                                            y.options.add(new Option("游戏", "0", false, true));// 默认选中
                                            y.options.add(new Option("电影", "1"));
                                            y.options.add(new Option("音乐", "2"));
                                            y.options.add(new Option("家居", "2"));
                                        }

                                    }
                                </script>

                            </div>
                        </div>
                        <!--设置文章内容-->
                        <div class="uk-form-row">
                            <label class="uk-form-label">文章内容</label>
                            <div class="uk-form-controls">
                                <div class="uk-htmleditor-content">
                                    <div class="uk-htmleditor-code">
                                        <textarea name="content" data-uk-htmleditor="{maxsplitsize:600}" data-uk-check-display="1" style="display: none;">&lt;h1&gt;Heading&lt;/h1&gt;
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="uk-button-success uk-button-large uk-align-medium-right uk-margin-top">确认发布</button>
                            <button type="submit" class="uk-button-primary uk-button-large uk-align-right uk-margin-top">保存至草稿箱</button>
                        </div>

                    </form>
                </li>

                <!--草稿箱文章-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="uk-width-1-10">文章ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章栏目</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">创建时间</th>
                            <th class="uk-width-1-10">编辑</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>1007</td>
                            <td>五月电影片单</td>
                            <td>电影</td>
                            <td>生活方式</td>
                            <td>2018/05/14</td>
                            <td>
                                <button class="uk-button-primary">修改</button>
                            </td>
                            <td>
                                <button class="uk-button-success">发布</button>
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
