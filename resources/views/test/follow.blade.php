@extends('layouts.home')

@section('content')
    <!--首页分类-->
    <div class="uk-grid ">
        <!--模块-->
        @foreach($articleColumns as $articleColumn)
        <div  class="uk-width-1-2 uk-margin-bottom">
            <a href="{{ url('menu'.$articleColumn->article_type_id).'/'.$articleColumn->name }}">
                <img src="images/fo-1.jpg">
            </a>
            <p class="uk-h2 uk-margin-top-remove ">{{ $articleColumn->name }}</p>
            <?php $flag = 0; ?>
            @foreach($count as $num)
                @if($num->article_column_id == $articleColumn->id)
                    <?php $flag = 1; ?>
                    <span class="uk-text-muted">{{ $num->count }}篇文章</span>
                @endif
            @endforeach
            @if($flag == 0)
                <span class="uk-text-muted">0篇文章</span>
            @endif

            <?php $flag = 0; ?>
            @foreach($follow as $foll)
                @if($foll->article_column_id == $articleColumn->id)
                    <?php $flag = 1;?>
                    <a href="{{ url('noFollow/'.$articleColumn->id) }}" class="uk-button uk-button-danger uk-button-small uk-align-right">取消关注</a>
                @endif
            @endforeach
            @if($flag == 0)
                <a  href="{{ url('attention/'.$articleColumn->id) }}"  class="uk-button uk-button-success uk-button-small uk-align-right">关注栏目</a>
            @endif
        </div>
        @endforeach
    </div>

@endsection
