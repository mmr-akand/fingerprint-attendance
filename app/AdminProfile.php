<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $table = 'profile_admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'about', 
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
