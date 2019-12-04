<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{    
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('ateo.teacher.index', $data);
    }
}
