<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class SchoolController extends Controller
{
    public function index()
    {
    	$user = Sentinel::getUser();

    	$school = $user->teacherProfile->school;

    	$data = [
    		'title' => 'Schools',
    		'schools' => [$school]
    	];

    	return view('teacher.school.index', $data);
    }
}
