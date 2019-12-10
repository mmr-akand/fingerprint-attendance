<?php

namespace App\MyLibrary\DashboardLib;

use App\School;
use App\TeacherProfile;
use App\Attendance;
use Sentinel;

class TeacherDashboard extends DashboardManager
{
	public function stats()
	{
		$user = Sentinel::getUser();
    	$school = $user->teacherProfile->school;

    	$teachers = $user->teacherProfile->school->teachers;

    	$teacherIds = $user->teacherProfile->school->teachers->pluck('id');
    	$attendances = Attendance::where('date', date("Y-m-d"))->whereIn('profile_teacher_id', $teacherIds)->get();

		$stats = $this->reformStats([$school], $teachers, $attendances);

		return $stats;
	}
}