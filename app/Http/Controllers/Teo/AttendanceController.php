<?php

namespace App\Http\Controllers\Teo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        /*$user = Sentinel::getUser();
        
        $school_ids = $user->teoProfile->upazila->schools->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();*/

        $attendances = Attendance::where('date', date("Y-m-d"))->get();

        $data = [
            'title' => 'Attendance - Present',
            'panel' => 'teo',
            'attendances' => $attendances
        ];

        return view('teo.attendance.index', $data);
    }

    public function absent()
    {
        /*$user = Sentinel::getUser();
        
        $school_ids = $user->teoProfile->upazila->schools->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();*/

        $present_teacher_ids = Attendance::where('date', date("Y-m-d"))->get()->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::whereNotIn('id', $present_teacher_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'panel' => 'teo',
            'absent_teachers' => $absent_teachers
        ];

        return view('teo.attendance.absent', $data);
    }
}
