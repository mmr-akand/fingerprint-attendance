<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Dashboard',
    	];

    	return view("ateo.dashboard", $data);
    }
}
