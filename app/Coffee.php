<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{

    public function drinker(){
    	return $this->belongsTo('App\Drinker');
    }

    public function report(){
    	return $this->belongsTo('App\Report');
    }
}
