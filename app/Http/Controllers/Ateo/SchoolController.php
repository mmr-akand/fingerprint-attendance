<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Schools'
    	];

    	return view('ateo.school.index', $data);
    }
}
