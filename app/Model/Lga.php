<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    //
	protected $guarded = [];

    public function school()
    {
    	return $this->hasMany('App\Model\School\School');
    }

    public function state()
    {
    	return $this->belongsTo('App\Model\State');
    }
}
