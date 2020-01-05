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

    	$school = $user->teacherProfile->school;

        $teachers = TeacherProfile::where('school_id', $school->id)->get();

    	$data = [
            'title' => 'Teachers',
            'panel' => 'teacher',
            'school' => $school,
    		'teachers' => $teachers
    	];

    	return view('teacher.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {       
        $data = [
            'title' => 'Teacher Information',
            'school' => $school,
            'teacher' => $teacher
        ];

        return view('teacher.teacher.show', $data);
    }
}
