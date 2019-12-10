<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo('App\TeacherProfile', 'profile_teacher_id', 'id');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
