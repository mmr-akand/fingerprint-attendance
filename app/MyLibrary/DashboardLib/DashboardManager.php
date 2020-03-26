<?php

namespace App\MyLibrary\DashboardLib;

class DashboardManager
{
	protected function reformStats($schools, $teachers, $attendances, $late_arrivals=[], $early_departures=[])
	{
		$total_schools = count($schools);
		$total_teachers = count($teachers);
		$present_today = count($attendances);
		$absent_today = $total_teachers - $present_today;
		$on_leaves = $absent_today;

		if($total_teachers > 0){
			$present_percentage = ceil( ($present_today / $total_teachers) * 100 );
			$absent_percentage = floor( ($absent_today / $total_teachers) * 100 );
		}else{
			$present_percentage = 0;
			$absent_percentage = 0;
		}

		return [
			'total_schools' => $total_schools,
			'total_teachers' => $total_teachers,
			'present_today' => $present_today,
			'absent_today' => $absent_today,
			'present_percentage' => $present_percentage,
			'absent_percentage' => $absent_percentage,
			'on_leaves' => $on_leaves,
			'late_arrivals' => count($late_arrivals),
			'early_departures' => count($early_departures)
		]; 
	}
}