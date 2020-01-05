<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\School;
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
            'panel' => 'ateo',
    		'teachers' => $teachers
    	];

    	return view('ateo.teacher.index', $data);
    }

    public function teacherBySchool(School $school)
    {       
        $teachers = TeacherProfile::where('school_id', $school->id)->get();

        $data = [
            'title' => 'Teachers',
            'panel' => 'ateo',
            'school' => $school,
            'teachers' => $teachers
        ];

        return view('ateo.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {       
        $data = [
            'title' => 'Teacher Information',
            'school' => $school,
            'teacher' => $teacher
        ];

        return view('ateo.teacher.show', $data);
    }
}
