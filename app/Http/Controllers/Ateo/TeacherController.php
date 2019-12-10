<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use Sentinel;

class TeacherController extends Controller
{    
    public function index()
    {
    	$user = Sentinel::getUser();

    	$ateoProfile = $user->ateoProfile;
    	
    	$school_ids = $ateoProfile->upazila->schools->where('profile_ateo_id', $ateoProfile->id)->pluck('id');
    	
    	$teachers = TeacherProfile::whereIn('school_id', $school_ids)->get();

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('ateo.teacher.index', $data);
    }
}
