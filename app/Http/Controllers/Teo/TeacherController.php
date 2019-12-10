<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use Sentinel;

class TeacherController extends Controller
{
    public function index()
    {
    	$user = Sentinel::getUser();
    	
    	$school_ids = $user->teoProfile->upazila->schools->pluck('id');
    	
    	$teachers = TeacherProfile::whereIn('school_id', $school_ids)->get();

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('teo.teacher.index', $data);
    }
}
