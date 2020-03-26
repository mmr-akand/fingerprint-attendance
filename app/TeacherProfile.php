<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherProfile extends Model
{
    use SoftDeletes; 
    
    protected $table = 'profile_teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }
}
