<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        $user = Sentinel::getUser();

        $teacherIds = $user->teacherProfile->school->teachers->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('profile_teacher_id', $teacherIds)->get();

        $data = [
            'title' => 'Attendance - Present',
            'attendances' => $attendances
        ];

        return view('teacher.attendance.index', $data);
    } 

    public function absent()
    {
        $user = Sentinel::getUser();

        $teacherIds = $user->teacherProfile->school->teachers->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('profile_teacher_id', $teacherIds)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'attendances' => $attendances
        ];

        return view('teacher.attendance.index', $data);
    }
}
