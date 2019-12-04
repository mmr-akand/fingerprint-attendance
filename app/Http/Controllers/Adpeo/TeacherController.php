<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{    
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('adpeo.teacher.index', $data);
    }
}
