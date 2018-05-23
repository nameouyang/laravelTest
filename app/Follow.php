<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    protected $table = 'follow';

    public function fromDateTime($value){
        return strtotime(parent::fromDateTime($value));
    }

    public function articleColumn()
    {
        return $this->hasOne(ArticleColumn::class, 'article_column_id', 'id');
    }

    public function article()
    {
        return $this->hasOne(Article::class, 'article_column_id', 'article_column_id');
    }
}
