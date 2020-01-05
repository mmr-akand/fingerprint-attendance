<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Union;
use App\School;
use Sentinel;

class SchoolController extends Controller
{
    public function index()
    {
    	$user = Sentinel::getUser();

    	$schools = School::where('profile_ateo_id', $user->ateoProfile->id)->get();

    	$data = [
    		'title' => 'Schools',
            'panel' => 'ateo',
    		'schools' => $schools
    	];

    	return view('ateo.school.index', $data);
    }

    public function schoolByUnion(Union $union)
    {
        $user = Sentinel::getUser();

        $ateoProfile = $user->ateoProfile;

        $schools = School::where('union_id', $union->id)->where('profile_ateo_id', $ateoProfile->id)->get();

        $data = [
            'title' => 'Schools',
            'panel' => 'ateo',
            'schools' => $schools,
            'union' => $union
        ];

        return view('ateo.school.index', $data);
    }
}