<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinker extends Model
{
    

    public function coffees(){
    	return $this->hasMany('App\Coffee');
    }

}
