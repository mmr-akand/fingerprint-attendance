<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
    	$attendances = Attendance::where('date', date("Y-m-d"))->get();

    	$data = [
    		'title' => 'Attendance - Present',
    		'attendances' => $attendances
    	];

    	return view('admin.attendance.index', $data);
    }

    public function absent()
    {
    	$attendances = Attendance::where('date', date("Y-m-d"))->get();

    	$data = [
    		'title' => 'Attendance - Absent',
    		'attendances' => $attendances
    	];

    	return view('admin.attendance.index', $data);
    }
}
