<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Schools'
    	];

    	return view('teacher.school.index', $data);
    }
}
