<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\School;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index(Request $request)
    {
        $parameters = [];
        $appends = [];

        if ($request->dateFrom) {
            $dateFrom = $request->dateFrom;
        } else {
            $dateFrom = date('Y-m-d');
        }
        $parameters [] = ['date', '>=', $dateFrom];
        $appends['dateFrom'] = $dateFrom;

        if ($request->dateTo) {
            $dateTo = $request->dateTo;
        } else {
            $dateTo = date('Y-m-d');
        }
        $parameters [] = ['date', '<=', $dateTo];
        $appends['dateTo'] = $dateTo;

        $user = Sentinel::getUser();

        $school = $user->teacherProfile->school;

        $parameters [] = ['school_id', '=', $school->id];
        
        $attendances = Attendance::where($parameters)->paginate(10);

        $data = [
            'title' => 'Attendance - Present',
            'panel' => 'teacher',
            'attendances' => $attendances,
            'appends' => $appends
        ];

        return view('teacher.attendance.index', $data);
    } 

    public function absent(Request $request)
    {
        $parameters = [];
        $appends = [];

        if ($request->date) {
            $date = $request->date;
        } else {
            $date = date('Y-m-d');
        }
        $appends['date'] = $date;

        $user = Sentinel::getUser();

        $school = $user->teacherProfile->school;
        
        $present_teacher_ids = Attendance::where('date', $date)->where('school_id', $school->id)->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::where('school_id', $school->id)->whereNotIn('id', $present_teacher_ids)->paginate(10);

        $data = [
            'title' => 'Attendance - Absent',
            'panel' => 'teacher',
            'absent_teachers' => $absent_teachers,
            'appends' => $appends
        ];

        return view('teacher.attendance.absent', $data);
    }

    public function history(School $school, TeacherProfile $teacher)
    {
        $histories = Attendance::where('profile_teacher_id', $teacher->id)->paginate(10);

        $data = [
            'title' => 'Attendance History',
            'panel' => 'teacher',
            'histories' => $histories,
            'school' => $school,
            'teacher' => $teacher,
        ];

        return view('admin.attendance.history', $data);
    }
}