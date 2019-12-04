<?php

namespace App\Http\Controllers\Dpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('dpeo.teacher.index', $data);
    }
}
