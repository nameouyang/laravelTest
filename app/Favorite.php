<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $table = 'favorite';

    public function fromDateTime($value){
        return strtotime(parent::fromDateTime($value));
    }

    public function article()
    {
        return $this->hasOne(Article::class, 'id', 'article_id');
    }
}
