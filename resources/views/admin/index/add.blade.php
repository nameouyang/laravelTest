
    @extends('layouts.back')

    @section('content')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

    <style>
        .uk-placeholder {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px dashed #e5e5e5;
            background: #fafafa;
            color: #666;
        }
        .uk-form-file {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            overflow: hidden;
        }
    </style>

    <div class="uk-grid uk-grid-medium" data-uk-grid-margin="">
        <!--左侧1／6-->
        <div class="uk-width-medium-1-6">
            <div class="uk-sticky-placeholder " style="height: 600px; margin: 0px;">
                <div class="uk-panel uk-panel-box" data-uk-sticky="{top:35}" style="margin: 0px;">
                    <ul class="uk-nav uk-nav-side " data-uk-switcher="{connect:'#good'}">
                        <li class="uk-active" aria-expanded="true"><a href="{{ url('admin/add') }}"> 创建文章</a></li>
                        {{--<li class="" aria-expanded="false"><a href="#">草稿箱</a></li>--}}
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
                    <form id ="form" class="uk-form uk-form-horizontal" method="POST" action="{{ url('/admin/test').'/' . $id }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!--设置文章标题-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it">文章标题</label>
                            <div class="uk-form-controls">
                                <input type="text" name="title" id="form-h-it" value="@if(!empty($res)){{ $res->title }}@endif" style="width: 380px;" placeholder="标题限长25字">
                            </div>
                        </div>

                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it">文章简介</label>
                            <div class="uk-form-controls">
                                <input type="area" name="abstract" value="@if(!empty($res)){{ $res->abstract }}@endif" id="form-h-it" style="width: 380px;" placeholder="标题限长25字">
                            </div>
                        </div>

                        <!--设置文章主题-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="first">文章主题</label>
                            <div class="uk-form-controls">
                                <select id="first" onchange="change()" name="zhuti">
                                    @foreach ($articleType as $artType)
                                        @if (1 == $artType->id && empty($res))
                                            <option selected="selected" value="{{ $artType->id }}">{{ $artType->name }}</option>
                                        @elseif(!empty($res) && $res->article_type_id == $artType->id)
                                            <option selected="selected" value="{{ $artType->id }}">{{ $artType->name }}</option>
                                        @else
                                            <option value="{{ $artType->id }}">{{ $artType->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!--设置文章栏目-->
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="second">文章栏目</label>
                            <div class="uk-form-controls">
                                <select id="second" name="lanmu">
                                    @foreach($articleColumn as $artColumn)
                                        @if(empty($res))
                                            @if(1 == $artColumn->article_type_id)
                                                <option value="{{ $artColumn->id }}">{{ $artColumn->name }}</option>
                                            @endif
                                        @else
                                            @if($artColumn->article_type_id == $res->article_type_id)
                                                @if($artColumn->id == $res->article_column_id)
                                                    <option selected="selected" value="{{ $artColumn->id }}">{{ $artColumn->name }}</option>
                                                @else
                                                    <option value="{{ $artColumn->id }}">{{ $artColumn->name }}</option>
                                                @endif;
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                <!--两个下拉菜单-->
                                <script>
                                    function change() {
                                        var x = document.getElementById("first");
                                        var y = document.getElementById("second");
                                        y.options.length = 0; // 清除second下拉框的所有内容
                                        if (x.selectedIndex == 0) {
                                            @foreach($articleColumn as $artColumn)
                                                @if(1 == $artColumn->article_type_id)
                                                    y.options.add(new Option("{{ $artColumn->name }}", "{{ $artColumn->id }}", false, true)); // 默认选中
                                                @endif
                                            @endforeach
                                           {{-- y.options.add(new Option("iOS", "0", false, true)); // 默认选中
                                            y.options.add(new Option("Android", "1"));
                                            y.options.add(new Option("Mac", "2"));
                                            y.options.add(new Option("Win", "3"));--}}
                                        }

                                        if (x.selectedIndex == 1) {
                                            @foreach($articleColumn as $artColumn)
                                                @if(2 == $artColumn->article_type_id)
                                                    y.options.add(new Option("{{ $artColumn->name }}", "{{ $artColumn->id }}", false, true)); // 默认选中
                                                @endif
                                            @endforeach
                                        }

                                        if (x.selectedIndex == 2) {
                                            @foreach($articleColumn as $artColumn)
                                                @if(3 == $artColumn->article_type_id)
                                                    y.options.add(new Option("{{ $artColumn->name }}", "{{ $artColumn->id }}", false, true)); // 默认选中
                                                @endif
                                            @endforeach
                                        }

                                        if (x.selectedIndex == 3) {
                                            @foreach($articleColumn as $artColumn)
                                                @if(4 == $artColumn->article_type_id)
                                                    y.options.add(new Option("{{ $artColumn->name }}", "{{ $artColumn->id }}", false, true)); // 默认选中
                                                @endif
                                            @endforeach
                                        }

                                    }
                                </script>

                            </div>
                        </div>

                            <div class="uk-form-row" style="@if(!empty($res))display:none;@endif">
                                <label class="uk-form-label" for="form-h-it">图片</label>
                                <div class="uk-form-controls">
                                    {{--<input type="file" name="img" id="form-h-it" style="width: 380px;" placeholder="标题限长25字">--}}
                                    <div id="upload-drop" class="uk-placeholder uk-text-center">
                                        <i class="uk-icon-cloud-upload uk-icon-medium uk-text-muted uk-margin-small-right"></i>
                                        将文件拖拽至此 或
                                        <a class="uk-form-file">
                                            <input id="upload-select" type="file" name="img">
                                        </a>
                                    </div>
                                    <div id="progressbar" class="uk-progress uk-hidden">
                                        <div class="uk-progress-bar" style="width: 0%;">...</div>
                                    </div>
                                </div>
                            </div>

                        <!--设置文章内容-->
                        <div class="uk-form-row">
                            <label class="uk-form-label">文章内容</label>
                            <div class="uk-form-controls">
                                <div class="uk-htmleditor-content">
                                    <div class="uk-htmleditor-code">
                                        <textarea name="content" data-uk-htmleditor="{maxsplitsize:600}" data-uk-check-display="1" style="display: none;">
                                            @if(!empty($res)){{ $res->content }} @else&lt;h1&gt;Heading&lt;/h1&gt;
                                                @endif
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id ="fabu" class="uk-button-success uk-button-large uk-align-medium-right uk-margin-top">确认发布</button>
                            <button type="button" id="caogao" class="uk-button-primary uk-button-large uk-align-right uk-margin-top">保存至草稿箱</button>
                        </div>

                        <input type="hidden" value="0" name="status">
                    </form>
                </li>

                <!--草稿箱文章-->
                <li>
                    <table class="uk-table uk-table-striped uk-table-hover ">
                        <thead>
                        <tr>
                            <th class="">ID</th>
                            <th class="uk-width-4-10">文章标题</th>
                            <th class="uk-width-1-10">文章主题</th>
                            <th class="uk-width-1-10">文章栏目</th>
                            <th class="uk-width-2-10">创建时间</th>
                            <th class="uk-width-1-10">编辑</th>
                            <th class="uk-width-1-10">操作</th>
                        </tr>
                        </thead>
                        @foreach($article as $art)
                                <tr>
                                    <td>{{ $art->id }}</td>
                                    <td class="" style="width: 90px;">
                                        <span class=" uk-text-truncate" style="width:350px;display: block;">
                                       {{ $art->title }}
                                        </span>
                                    </td>
                                    <td>{{ $art->articleType->name }}</td>
                                    <td>{{ $art->articleColumn->name }}</td>
                                    <td>{{ $art->created_at }}</td>
                                    <td>
                                        <a href="{{ url('admin/add').'/'.$art->id }}" class="uk-button uk-button-primary">
                                            修改
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/release').'/'.$art->id }}" class="uk-button uk-button-primary">
                                            发布
                                        </a>
                                    </td>
                                </tr>
                        @endforeach
                    </table>

                    <div>
                        <!--分隔线-->
                        <hr class="uk-grid-divider">
                        <!--分页按钮-->
                        {!! $article->links() !!}
                    </div>

                </li>


            </ul>
        </div>
    </div>
@endsection
    <script>
        window.onload = function(){
            $('#fabu').click(function (e) {
                $('input[name=status]').val('1');
                $('#form').submit();
                //e.preventDefault();

                /*var data = $('#form').serialize();
                $.post("fabu",{data:data},function(result){
                    //console.log(result.code)
                    if (result.code == 200) {
                        UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'success', pos:'top-right', timeout: 3000});

                        //UIkit.modal.alert("Attention!");
                    } else {
                        UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'danger', pos:'top-right', timeout: 3000});

                    }
                });*/
            });

            $('#caogao').click(function (e) {
                $('input[name=status]').val('0');
//                console.log($('#form'));
                $('#form').submit();
                /*e.preventDefault();
                var data = $('#form').serialize();
                $.post("caogao",{data:data},function(result){
                    if (result.code == 200) {
                        UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'success', pos:'top-right', timeout: 3000});

                        //UIkit.modal.alert("Attention!");
                    } else {
                        UIkit.notify("<i class='uk-icon-check'></i>" + result.msg, {status:'danger', pos:'top-right', timeout: 3000});

                    }
                });*/
            });
        };

    </script>
