<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'article';

    public function fromDateTime($value){
        return strtotime(parent::fromDateTime($value));
    }

    public function articleType()
    {
        return $this->hasOne(ArticleType::class, 'id', 'article_type_id');
    }

    public function articleColumn()
    {
        return $this->hasOne(ArticleColumn::class, 'id', 'article_column_id');
    }
}
