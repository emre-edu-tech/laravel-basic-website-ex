<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    public function vehiclemodels(){
        return $this->hasMany('App\VehicleModel');
    }
}
