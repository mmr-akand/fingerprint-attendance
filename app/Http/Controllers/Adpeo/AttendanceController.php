<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use Sentinel;

class AttendanceController extends Controller
{    
    public function index()
    {
        $user = Sentinel::getUser();
        $teoIds = $user->adpeoProfile->teos->pluck('id');

        $attendances = Attendance::where('date', date("Y-m-d"))->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

        $data = [
            'title' => 'Attendance - Present',
            'attendances' => $attendances
        ];

        return view('adpeo.attendance.index', $data);
    }

    public function absent()
    {
        $user = Sentinel::getUser();
        $teoIds = $user->adpeoProfile->teos->pluck('id');

        $attendances = Attendance::where('date', date("Y-m-d"))->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

        $data = [
            'title' => 'Attendance - Absent',
            'attendances' => $attendances
        ];

        return view('adpeo.attendance.index', $data);
    }
}
