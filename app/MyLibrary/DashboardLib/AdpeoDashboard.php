<?php

namespace App\MyLibrary\DashboardLib;

use App\School;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class AdpeoDashboard extends DashboardManager
{
	public function stats()
	{
		$user = Sentinel::getUser();
    	$teoIds = $user->adpeoProfile->teos->pluck('id');

    	$schools = School::whereIn('profile_teo_id', $teoIds)->get();

    	$teachers = TeacherProfile::with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

    	$attendances = Attendance::where('date', date("Y-m-d"))->with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

		$stats = $this->reformStats($schools, $teachers, $attendances);

		return $stats;
	}
}