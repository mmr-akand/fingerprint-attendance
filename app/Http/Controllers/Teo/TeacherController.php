<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\School;
use Sentinel;

class TeacherController extends Controller
{
    public function index()
    {
    	/*$user = Sentinel::getUser();
    	
    	$school_ids = $user->teoProfile->upazila->schools->pluck('id');
    	
    	$teachers = TeacherProfile::whereIn('school_id', $school_ids)->get();*/

        $teachers = TeacherProfile::get();

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('teo.teacher.index', $data);
    }

    public function teacherBySchool(School $school)
    {       
        $teachers = TeacherProfile::where('school_id', $school->id)->get();

        $data = [
            'title' => 'Teachers',
            'panel' => 'teo',
            'school' => $school,
            'teachers' => $teachers
        ];

        return view('teo.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {       
        $data = [
            'title' => 'Teacher Information',
            'school' => $school,
            'teacher' => $teacher
        ];

        return view('teo.teacher.show', $data);
    }
}
