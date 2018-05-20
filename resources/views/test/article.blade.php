
@extends('layouts.home')
@section('content')
    <div class="uk-grid">
        <div class="uk-width-medium-1-1">
            <article class="uk-article uk-text-large">
                <img src="images/test.jpg">
                <h2>
                    LookUp：每天一张精美设计的卡片，让背单词这件事更有趣
                </h2>
                <!--分类+ 点赞收藏-->
                <div class="uk-text-muted">
                    <span>#ios软件</span>
                    <span class="uk-align-right uk-margin-small-right">
                    <span class="uk-icon-thumbs-o-up " style="margin-right: 6px;"></span>6
                    <span style="margin-right: 6px;"></span>
                    <span class="uk-icon-star-o uk-margin-small-left" style="margin-right: 6px;"></span>8
                </span>
                </div>
                <p>
                    在学习英语的过程中，词汇量一直是非常重要的一个环节。但面对陌生的英语单词，我们似乎很容易对其感到厌烦。再加上英文单词与中文单词并非一一对应的关系，要搞清楚单词之间细微的差异，也绝非易事。我在学习英语的时候，几乎很少用中文单词来解释英文单词，而是去查找一个英文单词的英文解释，再根据自己的理解将它用中文表述出来。
                </p>
                <p>
                    但对很多人来说，英文解释中也会出现生词，如果要再去查找这个生词的解释，则无疑加大了学习难度。而 LookUp 用精心设计的卡片，让你可以更加清晰地理解英文单词。
                </p>
                <img src="images/article/001.jpg">
                <p>
                    LookUp 中的单词卡片包含了单词本身、词性、英文解释和例句，并与相应的图案结合。我们看到卡片的图案便可以猜到单词的大概意思，通过英文解释来进一步的理解它，再结合例句了解它的用法。这样一来，我们就又多积累了一个单词。
                </p>
                <p>
                    LookUp 每天都会推送一个新的单词卡片，打开 App 即可看到。当然，你也可以直接通过搜索框进行搜索。需要注意的是，有部分单词是没有单词卡片的。
                </p>
                <img src="images/article/002.jpg">
                <P>
                    在单词页面，除了可以看到单词的解释，还可以看到它的词源、百科词条和相似的单词。你也可以轻按「Pronunciation」按钮来听到这个单词的发音，点击右上角的爱心图标即可将该单词放入收藏夹，以便复习。
                </P>
                <img src="images/article/003.jpg">
                <p>
                    正如 LookUp 的名字一样，你不仅可以用它来 look up（查找）单词，更可以用它来查找名人、缩写等内容，LookUp 会调用维基百科来为你提供答案。你也可以使用 LookUp 的 AR 查词的功能来查找单词，将相机对着一件物品，屏幕上便会出现对应的单词。
                </p>
                <img src="images/article/004.jpg">
                <p>
                <hr class="uk-grid-divider">
                <a class="uk-button uk-button-danger ">点赞</a>
                <a class="uk-button uk-button-primary">收藏</a>
                <a class="uk-button uk-align-right " data-uk-smooth-scroll="">回到顶部</a>
                </p>
            </article>
        </div>
    </div>
</div>

</div>

@endsection