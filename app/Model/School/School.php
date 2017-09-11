<?php

namespace App\Model\School;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo('App\Model\Category');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\Model\SubCategory');
    }


    public function campus()
    {
    	return $this->hasMany('App\Model\School\Campus');
    }

    public function picture()
    {
    	return $this->hasMany('App\Model\School\SchoolPicture');
    }

    public function grade()
    {
    	return $this->belongsToMany('App\Model\School\Grade', 'school_grades', 'grade_id', 'school_id')->withPivot('amount');
    }

    public function subject()
    {
    	return $this->belongsToMany('App\Model\School\Subject', 'subjects', 'subject_id', 'school_id');
    }

    public function registrations()
    {
    	return $this->hasMany('App\Model\School\SchoolRegistration');
    }


    public function user()
    {
        return $this->belongsTO('App\User');
    }

    public function is_active()
    {
        if($this->status)
        {
            return true;
        }
        return false;
    }

    public function owner()
    {
        return $this->belongsTO('App\User');
    }

    public function state()
    {
        return $this->belongsTO('App\Model\State');
    }

    public function lga()
    {
        return $this->belongsTO('App\Model\Lga');
    }


}
