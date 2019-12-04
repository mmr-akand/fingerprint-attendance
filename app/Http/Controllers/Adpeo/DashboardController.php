<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Dashboard',
    	];

    	return view("adpeo.dashboard", $data);
    }
}
