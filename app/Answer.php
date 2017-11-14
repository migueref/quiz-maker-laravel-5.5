<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
   {
       return $this->hasOne('App\Question');
   }
   public function option()
   {
        return $this->hasOne('App\Option');
   }
    public function form()
   {
       return $this->hasOne('App\Form');
    }
}
