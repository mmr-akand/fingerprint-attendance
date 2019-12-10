<?php

namespace App\MyLibrary\DashboardLib;

use App\School;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class TeoDashboard extends DashboardManager
{
	public function stats()
	{
    	$user = Sentinel::getUser();

    	$schools = School::where('profile_teo_id', $user->teoProfile->id)->get();

    	$school_ids = $user->teoProfile->upazila->schools->pluck('id');
    	$teachers = TeacherProfile::whereIn('school_id', $school_ids)->get();

    	$attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();

		$stats = $this->reformStats($schools, $teachers, $attendances);

		return $stats;
	}
}