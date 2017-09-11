<?php

namespace App\Model\School;

use Illuminate\Database\Eloquent\Model;

class SchoolPicture extends Model
{
    //

    protected $guarded = [];

    public function school()
    {
    	return $this->belongsTo('App\Model\School\School');
    }
}
