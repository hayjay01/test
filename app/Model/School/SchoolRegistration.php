<?php

namespace App\Model\School;

use Illuminate\Database\Eloquent\Model;

class SchoolRegistration extends Model
{
    //
    protected $guarded = [];

    public function school()
    {
    	return $this->belongsTo('App\Model\School\School');
    }

    public function fullname()
    {
    	return ucfirst($this->first_name) . ' ' .  ucfirst($this->last_name);
    }

    public function paid()
    {
    	if($this->pay_status)
    	{
    		return true;
    	}
    	return 'Not Paid';
    }

    public function disabled()
    {
    	if($this->disability =="Yes")
    	{
    		return ucfirst($this->disability_type);
    	}
    	return 'Not Disable';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function grade()
    {
        return $this->belongsTo('App\Model\School\Grade');
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public static function referenceCode($school)
    {
         $reference_code =  strtoupper(substr($school->name, 0, 2) . str_random(3) . 'T' . str_random(2) . (string)auth()->user()->id.'U');
         return $reference_code;
    }
}
