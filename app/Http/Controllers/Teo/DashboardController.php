<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\TeoDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new TeoDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("teo.dashboard", $data);
    }
}
