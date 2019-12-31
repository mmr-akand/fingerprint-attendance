<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\Union;

class SchoolController extends Controller
{
    public function index()
    {
    	$schools = School::get();

    	$data = [
    		'title' => 'Schools',
    		'panel' => 'admin',
    		'schools' => $schools
    	];

    	return view('admin.school.index', $data);
    }

    public function schoolByUnion(Union $union)
    {
    	$schools = School::where('union_id', $union->id)->get();

    	$data = [
    		'title' => 'Schools',
    		'panel' => 'admin',
    		'schools' => $schools,
    		'union' => $union
    	];

    	return view('admin.school.index', $data);
    }
}
