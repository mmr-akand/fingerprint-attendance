<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DpeoProfile extends Model
{
    protected $table = 'profile_dpeos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id', 'user_id', 'about', 
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
