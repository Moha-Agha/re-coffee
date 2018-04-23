<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    public function coffees(){
    	return $this->hasMany('App\coffee');
    }
}
