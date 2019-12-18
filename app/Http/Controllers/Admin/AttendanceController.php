<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\TeacherProfile;

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
    	$attendance_ids = Attendance::where('date', date("Y-m-d"))->get()->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::whereNotIn('id', $attendance_ids)->get();

    	$data = [
    		'title' => 'Attendance - Absent',
    		'absent_teachers' => $absent_teachers
    	];

    	return view('admin.attendance.absent', $data);
    }
}
