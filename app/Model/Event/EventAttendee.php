<?php

namespace App\Model\Event;

use Illuminate\Database\Eloquent\Model;

class EventAttendee extends Model
{
    //
	protected $guarded = [];

	public static function referenceCode($event)
	{
		 $reference_code = strtoupper(substr($event->event_name, 0, 2) . str_random(3) . 'T' . str_random(2) . (string)auth()->user()->id.'U');
		 return $reference_code;
	}

	
}