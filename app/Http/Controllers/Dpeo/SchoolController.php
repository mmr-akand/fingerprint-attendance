<?php

namespace App\Http\Controllers\Dpeo;

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
    		'panel' => 'dpeo',
    		'schools' => $schools
    	];

    	return view('dpeo.school.index', $data);
    }

    public function schoolByUnion(Union $union)
    {
    	$schools = School::where('union_id', $union->id)->get();

    	$data = [
    		'title' => 'Schools',
    		'panel' => 'dpeo',
    		'schools' => $schools,
    		'union' => $union
    	];

    	return view('dpeo.school.index', $data);
    }
}
