<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    const BODA = 1;

    protected $table = 'upazilas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id', 'name'
    ];

    public function schools()
    {
        return $this->hasMany('App\School');
    }
}
