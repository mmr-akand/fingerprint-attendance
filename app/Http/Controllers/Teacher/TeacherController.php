<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{    
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('teacher.teacher.index', $data);
    }
}
