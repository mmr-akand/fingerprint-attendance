<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\School;
use App\TeacherProfile;

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

    	$attendances = Attendance::where($parameters)->paginate(10);

    	$data = [
            'title' => 'Present',
    		'panel' => 'admin',
    		'attendances' => $attendances,
            'appends'=>$appends
    	];

    	return view('admin.attendance.index', $data);
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

    	$attendance_ids = Attendance::where('date', $date)->get()->pluck('profile_teacher_id');

        $absent_teachers = TeacherProfile::whereNotIn('id', $attendance_ids)->paginate(10);

    	$data = [
    		'title' => 'Absent',
            'panel' => 'admin',
    		'absent_teachers' => $absent_teachers,
            'appends'=>$appends
    	];

    	return view('admin.attendance.absent', $data);
    }

    public function lateArrival()
    {
        $attendances = Attendance::where('date', date("Y-m-d"))->whereTime('entry', '>', '10:00:00')->get();

        $data = [
            'title' => 'Late Arrival',
            'panel' => 'admin',
            'attendances' => $attendances
        ];

        return view('admin.attendance.index', $data);
    }

    public function earlyDeparture()
    {
        $attendances = Attendance::where('date', date("Y-m-d"))->whereTime('departure', '<', '16:00:00')->get();

        $data = [
            'title' => 'Early Departure',
            'panel' => 'admin',
            'attendances' => $attendances
        ];

        return view('admin.attendance.index', $data);
    }

    public function history(School $school, TeacherProfile $teacher)
    {
        $histories = Attendance::where('profile_teacher_id', $teacher->id)->paginate(10);

        $data = [
            'title' => 'Attendance History',
            'panel' => 'admin',
            'histories' => $histories,
            'school' => $school,
            'teacher' => $teacher,
        ];

        return view('admin.attendance.history', $data);
    }
}