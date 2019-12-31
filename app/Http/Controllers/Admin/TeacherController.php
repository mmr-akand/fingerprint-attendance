<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\School;

class TeacherController extends Controller
{
    public function index()
    {    	
    	$teachers = TeacherProfile::get();

    	$data = [
    		'title' => 'Teachers',
    		'panel' => 'admin',
    		'teachers' => $teachers
    	];

    	return view('admin.teacher.index', $data);
    }

    public function teacherBySchool(School $school)
    {    	
    	$teachers = TeacherProfile::where('school_id', $school->id)->get();

    	$data = [
    		'title' => 'Teachers',
    		'panel' => 'admin',
    		'school' => $school,
    		'teachers' => $teachers
    	];

    	return view('admin.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {    	
    	$data = [
    		'title' => 'Teacher Information',
    		'school' => $school,
    		'teacher' => $teacher
    	];

    	return view('admin.teacher.show', $data);
    }
}
