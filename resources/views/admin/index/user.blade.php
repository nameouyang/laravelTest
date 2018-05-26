
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
            <th class="uk-width-1-10">ID</th>
            <th class="uk-width-1-10">用户名</th>
            <th class="uk-width-1-10">邮箱</th>
            <th class="uk-width-7-10">操作</th>
        </tr>
        </thead>
        @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td class="" style="width: 90px;">
                        <span class=" uk-text-truncate" >
                       {{ $user->name }}
                        </span>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('admin/userDelete').'/'.$user->id }}" class="uk-button uk-button-primary">
                            删除
                        </a>
                    </td>
                </tr>
        @endforeach
    </table>

    <div>
        <!--分页按钮-->
        {!! $users->links() !!}
    </div>

@endsection
