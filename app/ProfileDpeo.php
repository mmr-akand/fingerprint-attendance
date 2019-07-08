<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileDpeo extends Model
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
}
