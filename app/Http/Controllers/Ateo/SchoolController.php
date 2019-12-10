<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    		'schools' => $schools
    	];

    	return view('ateo.school.index', $data);
    }
}
