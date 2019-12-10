<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\AteoDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new AteoDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("ateo.dashboard", $data);
    }
}
