<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use Sentinel;

class SchoolController extends Controller
{
    public function index()
    {
    	$user = Sentinel::getUser();
    	$teoIds = $user->adpeoProfile->teos->pluck('id');

    	$schools = School::whereIn('profile_teo_id', $teoIds)->get();

    	$data = [
    		'title' => 'Teachers',
    		'schools' => $schools
    	];

    	return view('adpeo.school.index', $data);
    }
}
