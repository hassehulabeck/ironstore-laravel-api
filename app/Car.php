<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function person() {
        return $this->belongsTo('App\Person');
    }
}
