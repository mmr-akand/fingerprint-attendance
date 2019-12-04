<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Teachers'
    	];

    	return view('admin.teacher.index', $data);
    }
}
