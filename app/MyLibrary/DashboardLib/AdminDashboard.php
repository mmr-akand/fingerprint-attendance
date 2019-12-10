<?php

namespace App\MyLibrary\DashboardLib;

use App\School;
use App\TeacherProfile;
use App\Attendance;

class AdminDashboard extends DashboardManager
{
	public function stats()
	{
		$schools = School::get();

    	$teachers = TeacherProfile::get();

    	$attendances = Attendance::where('date', date("Y-m-d"))->get();

		$stats = $this->reformStats($schools, $teachers, $attendances);

		return $stats;
	}
}