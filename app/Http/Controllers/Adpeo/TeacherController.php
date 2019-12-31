<?php

namespace App\Http\Controllers\Adpeo;

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
    	$teoIds = $user->adpeoProfile->teos->pluck('id');

    	$teachers = TeacherProfile::with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

    	$data = [
    		'title' => 'Teachers',
            'panel' => 'adpeo',
    		'teachers' => $teachers
    	];

    	return view('adpeo.teacher.index', $data);
    }

    public function teacherBySchool(School $school)
    {       
        $user = Sentinel::getUser();
        $teoIds = $user->adpeoProfile->teos->pluck('id');

        $teachers = TeacherProfile::where('school_id', $school->id)->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

        $data = [
            'title' => 'Teachers',
            'panel' => 'adpeo',
            'school' => $school,
            'teachers' => $teachers
        ];

        return view('adpeo.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {       
        $data = [
            'title' => 'Teacher Information',
            'school' => $school,
            'teacher' => $teacher
        ];

        return view('adpeo.teacher.show', $data);
    }
}
