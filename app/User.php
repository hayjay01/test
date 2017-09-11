<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role()
    {
        return $this->belongsTo('App\Model\Role');
    }

    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach ($roles as $role ) {
                if($this->hasRole($role)){
                    return true;
                }
            }
        }
        else{
            if($this->hasRole($roles)){
                return true;
            }
        }
    }

    public function hasRole($role)
    {   
     
        $role = Role::where('name', $role)->first();
        // dd($role);
        if($role)
            return true;
        return false;
    }

    public function event()
    {
        return $this->belongsToMany('App\Event\Event', 'event_attendees', 'user_id', 'event_id')->withPivot('quantity', 'sms', 'amount', 'pay_status', 'reference_code');
    }

    public function ownEvent()
    {
        return $this->hasMany('App\Model\Event\Event', 'owner_id');
    }

    public function ownPageant()
    {
        return $this->hasMany('App\Model\Event\BeautyPageant', 'owner_id');
    }

    public function ownSchool()
    {
        return $this->hasOne('App\Model\School\School', 'owner_id');
    }

}
