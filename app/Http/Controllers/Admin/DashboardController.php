<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyLibrary\DashboardLib\AdminDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new AdminDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("admin.dashboard", $data);
    }
}
