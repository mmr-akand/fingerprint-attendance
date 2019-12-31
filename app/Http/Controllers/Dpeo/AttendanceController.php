<?php

namespace App\Http\Controllers\Dpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
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

    	return view('dpeo.attendance.index', $data);
    }

    public function absent()
    {
    	$attendance_ids = Attendance::where('date', date("Y-m-d"))->get()->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::whereNotIn('id', $attendance_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'absent_teachers' => $absent_teachers
        ];

    	return view('dpeo.attendance.absent', $data);
    }
}
