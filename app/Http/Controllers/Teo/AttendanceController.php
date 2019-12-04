<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('teo.attendance.index', $data);
    }
}
