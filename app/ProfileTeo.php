<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileTeo extends Model
{
    protected $table = 'profile_teos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'upazila_id', 'user_id', 'profile_dpeo_id', 'profile_adpeo_id', 'about', 
    ];
}
