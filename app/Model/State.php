<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //

    protected $guarded = [];

    public function lga()
    {
    	return $this->hasMany('App\Model\Lga');
    }

    public function school()
    {
    	return $this->hasMany('App\Model\School\School');
    }
}
