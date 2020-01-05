<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\TeacherProfile;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        /*$user = Sentinel::getUser();
        $teoIds = $user->adpeoProfile->teos->pluck('id');

        $attendances = Attendance::where('date', date("Y-m-d"))->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();*/

        $attendances = Attendance::where('date', date("Y-m-d"))->get();

        $data = [
            'title' => 'Attendance - Present',
            'panel' => 'adpeo',
            'attendances' => $attendances
        ];

        return view('adpeo.attendance.index', $data);
    }

    public function absent()
    {
       /* $user = Sentinel::getUser();
        $teoIds = $user->adpeoProfile->teos->pluck('id');

        $attendances = Attendance::where('date', date("Y-m-d"))->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();*/

        $attendance_ids = Attendance::where('date', date("Y-m-d"))->get()->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::whereNotIn('id', $attendance_ids)->get();

        $data = [
            'title' => 'Attendance - Absent',
            'panel' => 'adpeo',
            'absent_teachers' => $absent_teachers
        ];

        return view('adpeo.attendance.absent', $data);
    }
}
