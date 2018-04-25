<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinker extends Model
{


    public  function where($string, $string1, $drinker_id)
    {
    }

    public  function find($drinker_id)
    {
    }

    public function coffees(){
    	return $this->hasMany('App\Coffee');
    }

}
