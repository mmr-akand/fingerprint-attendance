<?php

namespace App\Http\Controllers\Ateo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        $user = Sentinel::getUser();

        $ateoProfile = $user->ateoProfile;
        
        $school_ids = $ateoProfile->upazila->schools->where('profile_ateo_id', $ateoProfile->id)->pluck('id');
        
        $attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();

        $data = [
            'title' => 'Attendance - Present',
            'panel' => 'ateo',
            'attendances' => $attendances
        ];

        return view('ateo.attendance.index', $data);
    }

    public function absent()
    {
        $user = Sentinel::getUser();

        $ateoProfile = $user->ateoProfile;
        
        $school_ids = $ateoProfile->upazila->schools->where('profile_ateo_id', $ateoProfile->id)->pluck('id');
        
        $present_teacher_ids = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->pluck('profile_teacher_id');
        
        $absent_teachers = TeacherProfile::whereIn('school_id', $school_ids)->whereNotIn('id', $present_teacher_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'panel' => 'ateo',
            'absent_teachers' => $absent_teachers
        ];

        return view('ateo.attendance.absent', $data);
    }
}
