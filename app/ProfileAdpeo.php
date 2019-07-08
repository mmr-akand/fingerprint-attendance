<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileAdpeo extends Model
{
    protected $table = 'profile_adpeos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id', 'user_id', 'profile_dpeo_id', 'about', 
    ];
}
