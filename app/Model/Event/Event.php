<?php

namespace App\Model\Event;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
	protected $guarded = [];


	public function is_active()
	{
		if($this->status)
		{
			return true;
		}
		return false;
	}

	public function category()
	{
		return $this->belongsTO('App\Model\Category');
	}

	public function user()
	{
		return $this->belongsToMany('App\User', 'event_attendees', 'user_id', 'event_id')->withPivot('quantity', 'sms', 'amount', 'pay_status', 'reference_code');
	}

	public function eventOwner()
	{
		return $this->belongsTO('App\User', 'owner_id');
	}
}
