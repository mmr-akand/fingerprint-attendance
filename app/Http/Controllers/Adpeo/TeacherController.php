<?php

namespace App\Http\Controllers\Adpeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use Sentinel;

class TeacherController extends Controller
{    
    public function index()
    {
    	$user = Sentinel::getUser();
    	$teoIds = $user->adpeoProfile->teos->pluck('id');

    	$teachers = TeacherProfile::with('school')->whereHas('school', function($query) use($teoIds) {
            $query->whereIn('profile_teo_id', $teoIds);
        })->get();

    	$data = [
    		'title' => 'Teachers',
    		'teachers' => $teachers
    	];

    	return view('adpeo.teacher.index', $data);
    }
}
