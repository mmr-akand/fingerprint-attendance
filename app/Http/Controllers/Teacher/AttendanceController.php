<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('teacher.attendance.index', $data);
    }
}
