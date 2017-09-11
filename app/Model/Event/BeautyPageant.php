<?php

namespace App\Model\Event;

use Illuminate\Database\Eloquent\Model;

class BeautyPageant extends Model
{
    //
    protected $guarded = [];

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

	public function category()
	{
		return $this->belongsTO('App\Model\Category');
	}

	public function pageantOwner()
	{
		return $this->belongsTO('App\User', 'owner_id');
	}
}
