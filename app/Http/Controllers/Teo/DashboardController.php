<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Dashboard',
    	];

    	return view("teo.dashboard", $data);
    }
}
