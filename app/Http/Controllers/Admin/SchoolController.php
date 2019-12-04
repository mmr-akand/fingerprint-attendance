<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Schools'
    	];

    	return view('admin.school.index', $data);
    }
}
