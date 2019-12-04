<?php

namespace App\Http\Controllers\Dpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('dpeo.attendance.index', $data);
    }
}
