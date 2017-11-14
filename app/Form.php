<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
  public function exam()
  {
        return $this->belongsTo('App\Exam');
  }
  public function answers()
 {
     return $this->hasMany('App\Answer');
 }
 public function user()
  {
        return $this->belongsTo('App\User','applicant_id');
  }
}
