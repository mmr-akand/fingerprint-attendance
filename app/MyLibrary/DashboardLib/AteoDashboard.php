<?php

namespace App\MyLibrary\DashboardLib;

use App\School;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class AteoDashboard extends DashboardManager
{
	public function stats()
	{
		$user = Sentinel::getUser();

		$ateoProfile = $user->ateoProfile;
    	$schools = School::where('profile_ateo_id', $ateoProfile->id)->get();

    	$school_ids = $ateoProfile->upazila->schools->where('profile_ateo_id', $ateoProfile->id)->pluck('id');

    	$teachers = TeacherProfile::whereIn('school_id', $school_ids)->get();

    	$attendances = Attendance::where('date', date("Y-m-d"))->whereIn('school_id', $school_ids)->get();

		$stats = $this->reformStats($schools, $teachers, $attendances);

		return $stats;
	}
}