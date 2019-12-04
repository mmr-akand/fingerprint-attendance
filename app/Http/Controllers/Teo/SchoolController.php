<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Schools'
    	];

    	return view('teo.school.index', $data);
    }
}
