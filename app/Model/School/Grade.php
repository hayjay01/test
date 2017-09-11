<?php

namespace App\Model\School;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //

    public function school()
    {
    	return $this->belongsToMany('App\Model\School\School', 'school_grades', 'grade_id', 'school_id')->withPivot('amount');
    }
}
