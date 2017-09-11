<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function sub_category()
    {
    	return $this->hasMany('App\Model\SubCategory');
    }
}
