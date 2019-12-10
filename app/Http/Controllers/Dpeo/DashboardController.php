<?php

namespace App\Http\Controllers\Dpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\DpeoDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new DpeoDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("dpeo.dashboard", $data);
    }
}
