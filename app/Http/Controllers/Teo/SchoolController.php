<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use Sentinel;

class SchoolController extends Controller
{
    public function index()
    {
    	$user = Sentinel::getUser();

    	$schools = School::where('profile_teo_id', $user->teoProfile->id)->get();

    	$data = [
    		'title' => 'Schools',
    		'schools' => $schools
    	];

    	return view('teo.school.index', $data);
    }
}
