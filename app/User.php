<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $loginNames = [
        'phone', 'email'
    ];


    public function adminProfile()
    {
        return $this->hasOne('App\AdminProfile');
    }

    public function dpeoProfile()
    {
        return $this->hasOne('App\DpeoProfile');
    }

    public function adpeoProfile()
    {
        return $this->hasOne('App\AdpeoProfile');
    }

    public function teoProfile()
    {
        return $this->hasOne('App\TeoProfile');
    }

    public function ateoProfile()
    {
        return $this->hasOne('App\AteoProfile');
    }

    public function teacherProfile()
    {
        return $this->hasOne('App\TeacherProfile');
    }
}
