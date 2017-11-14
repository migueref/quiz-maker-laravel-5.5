<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     public function options()
    {
        return $this->belongsToMany('App\Option');
    }
    public function exams()
   {
       return $this->belongsToMany('App\Exam');
   }
}
