<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class SchoolController extends Controller
{
    public function index()
    {
    	$schools = School::get();

    	$data = [
    		'title' => 'Schools',
    		'schools' => $schools
    	];

    	return view('admin.school.index', $data);
    }
}
