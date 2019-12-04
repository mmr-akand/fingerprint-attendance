<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Schools'
    	];

    	return view('adpeo.school.index', $data);
    }
}
