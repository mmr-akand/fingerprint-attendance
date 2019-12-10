<?php

namespace App\MyLibrary\DashboardLib;

class DashboardManager
{
	protected function reformStats($schools, $teachers, $attendances)
	{
		$total_schools = count($schools);
		$total_teachers = count($teachers);
		$present_today = count($attendances);
		$absent_today = $total_teachers - $present_today;

		if($total_teachers > 0)
			$present_percentage = round( ($present_today / $total_teachers) * 100 );
		else
			$present_percentage = 0;

		return [
			'total_schools' => $total_schools,
			'total_teachers' => $total_teachers,
			'present_today' => $present_today,
			'absent_today' => $absent_today,
			'present_percentage' => $present_percentage
		]; 
	}
}