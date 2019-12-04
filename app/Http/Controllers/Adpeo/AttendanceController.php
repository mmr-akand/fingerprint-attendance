<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index()
    {
    	$data = [
    		'title' => 'Attendance'
    	];

    	return view('adpeo.attendance.index', $data);
    }
}
