<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    public function make(){
        return $this->belongsTo('App\Make');
    }
}
