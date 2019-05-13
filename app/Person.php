<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * Get the drivinglicense record associated with the person.
     */
    public function drivinglicense()
    {
        return $this->hasOne('App\Drivinglicense');
    }

    public function car() {
        return $this->hasMany('App\Car');
    }

}
