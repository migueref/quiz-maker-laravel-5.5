<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
  public function forms()
  {
      return $this->hasMany('App\Form');
  }
  public function questions()
 {
     return $this->belongsToMany('App\Question');
 }
}
