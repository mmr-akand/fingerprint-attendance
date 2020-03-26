<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\DashboardLib\TeacherDashboard;
use Sentinel;

class DashboardController extends Controller
{
    public function index()
    {
    	$dashboard = new TeacherDashboard();

    	$stats = $dashboard->stats();

        $user = Sentinel::getUser();

        $school = $user->teacherProfile->school;

    	$data = [
    		'title' => $school->name,
    		'stats' => $stats,
    	];

    	return view("teacher.dashboard", $data);
    }
}
