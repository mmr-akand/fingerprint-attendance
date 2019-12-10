<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;

class TeacherController extends Controller
{
    public function index()
    {    	
    	$teachers = TeacherProfile::get();

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('admin.teacher.index', $data);
    }
}
