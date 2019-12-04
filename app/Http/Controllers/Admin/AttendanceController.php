<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('admin.attendance.index', $data);
    }
}
