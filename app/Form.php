<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
  public function exam()
  {
        return $this->belongsTo('App\Exam');
  }
}
