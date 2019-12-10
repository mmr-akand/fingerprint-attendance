<?php

namespace App\Http\Controllers\Dpeo;

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

    	return view('dpeo.school.index', $data);
    }
}
