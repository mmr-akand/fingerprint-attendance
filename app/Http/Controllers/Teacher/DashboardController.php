<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\TeacherDashboard;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new TeacherDashboard();

    	$stats = $dashboard->stats();

    	$data = [
    		'title' => 'Dashboard',
    		'stats' => $stats,
    	];

    	return view("teacher.dashboard", $data);
    }
}
