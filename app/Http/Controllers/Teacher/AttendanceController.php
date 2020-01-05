<?php

namespace App\Http\Controllers\Teacher;

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

        $school = $user->teacherProfile->school;
        
        $attendances = Attendance::where('date', date("Y-m-d"))->where('school_id', $school->id)->get();

        $data = [
            'title' => 'Attendance - Present',
            'panel' => 'teacher',
            'attendances' => $attendances
        ];

        return view('teacher.attendance.index', $data);
    } 

    public function absent()
    {
        $user = Sentinel::getUser();

        $school = $user->teacherProfile->school;
        
        $present_teacher_ids = Attendance::where('date', date("Y-m-d"))->where('school_id', $school->id)->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::where('school_id', $school->id)->whereNotIn('id', $present_teacher_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'panel' => 'teacher',
            'absent_teachers' => $absent_teachers
        ];

        return view('teacher.attendance.absent', $data);
    }
}
