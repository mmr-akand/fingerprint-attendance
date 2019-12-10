<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        $user = Sentinel::getUser();
        
        $school_ids = $user->teoProfile->upazila->schools->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();

        $data = [
            'title' => 'Attendance - Present',
            'attendances' => $attendances
        ];

        return view('teo.attendance.index', $data);
    }

    public function absent()
    {
        $user = Sentinel::getUser();
        
        $school_ids = $user->teoProfile->upazila->schools->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'attendances' => $attendances
        ];

        return view('teo.attendance.index', $data);
    }
}
