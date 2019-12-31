<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'upazila_id', 'profile_teo_id', 'profile_ateo_id', 'name',
    ];

    public function teachers()
    {
        return $this->hasMany('App\TeacherProfile');
    }

    public function union()
    {
        return $this->belongsTo('App\Union', 'union_id');
    }
}
