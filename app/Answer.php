<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
   public function option()
   {
       return $this->belongsTo('App\Option');
   }
   public function form()
   {
       return $this->belongsTo('App\Form');
   }

}
