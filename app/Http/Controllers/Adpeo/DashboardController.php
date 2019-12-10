<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\AdpeoDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new AdpeoDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("adpeo.dashboard", $data);
    }
}
