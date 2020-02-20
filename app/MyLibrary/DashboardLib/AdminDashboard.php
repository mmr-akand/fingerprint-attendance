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
    	
    	$late_arrivals = Attendance::where('date', date("Y-m-d"))->whereTime('entry', '>', '10:00:00')->get();

    	$early_departures = Attendance::where('date', date("Y-m-d"))->whereTime('departure', '<', '17:00:00')->get();    	

		$stats = $this->reformStats($schools, $teachers, $attendances, $late_arrivals, $early_departures);

		return $stats;
	}
}