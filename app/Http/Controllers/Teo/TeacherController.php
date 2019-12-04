<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('teo.teacher.index', $data);
    }
}
