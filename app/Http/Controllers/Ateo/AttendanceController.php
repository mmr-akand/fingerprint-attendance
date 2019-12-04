<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('ateo.attendance.index', $data);
    }
}
