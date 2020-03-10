<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];
    public function comments(){
        return $this->hasMany(Comment::class,'topic_id','id');
    }

    public function getShowLink(){
        return route('show-topic',['id'=>$this->id]);
    }

    public function getEditLink(){
        return route('edit-topic',['id'=>$this->id]);
    }
}
