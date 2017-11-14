<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
     public function questions()
    {
        return $this->belongsToMany('App\Question');
    }
    public function answer()
   {
       return $this->hasOne('App\Answer');
   }
}
