<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileTeacher extends Model
{
    protected $table = 'profile_teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'user_id', 'is_head_teacher', 'about', 
    ];
}
