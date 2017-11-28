<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
