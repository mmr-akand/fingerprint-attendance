<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdpeoProfile extends Model
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

    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function teos()
    {
        return $this->hasmany('App\TeoProfile', 'profile_adpeo_id');
    }
}
