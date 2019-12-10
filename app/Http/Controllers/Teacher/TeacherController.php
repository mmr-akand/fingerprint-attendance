<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\TeacherProfile;
use Sentinel;

class TeacherController extends Controller
{    
    public function index()
    {
    	$user = Sentinel::getUser();

    	$teachers = $user->teacherProfile->school->teachers;

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('teacher.teacher.index', $data);
    }
}
