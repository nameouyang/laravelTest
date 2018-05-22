<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThumbsUp extends Model
{
    //

    protected $table = 'thumbs_up';

    public function fromDateTime($value){
        return strtotime(parent::fromDateTime($value));
    }
}
