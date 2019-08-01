<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // user-ticket relationship
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
