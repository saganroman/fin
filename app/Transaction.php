<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    public function user()
    {
        //return $this->hasMany('App\User');
        return $this->belongsTo('App\User');
    }
    public function partner()
    {
      //  return $this->hasMany('App\Partner');
        return $this->belongsTo('App\Partner', 'program_id');
    }
}
