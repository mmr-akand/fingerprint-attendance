<?php

namespace App\Http\Controllers\Dpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Dashboard',
    	];

    	return view("dpeo.dashboard", $data);
    }
}
