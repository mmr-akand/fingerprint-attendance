<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\TeacherProfile;
use App\Attendance;
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
        $attendance = Attendance::where('date', date("Y-m-d"))->where('profile_teacher_id', $teacher->id)->first();

        $data = [
            'title' => 'Teacher Information',
            'panel' => 'teacher',
            'school' => $school,
            'teacher' => $teacher,
            'attendance' => $attendance,
        ];

        return view('teacher.teacher.show', $data);
    }
}
