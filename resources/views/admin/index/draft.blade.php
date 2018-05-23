
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
        <!--分页按钮-->
        {!! $article->links() !!}
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
