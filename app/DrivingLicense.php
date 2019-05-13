<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrivingLicense extends Model
{
    /**
     * Get the drivinglicense record associated with the person.
     */
    public function person()
    {
        return $this->belongsTo('App\Person');
    }

}
