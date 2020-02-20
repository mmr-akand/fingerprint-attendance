<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherProfile;
use App\School;
use App\Attendance;

class TeacherController extends Controller
{
    public function index()
    {    	
    	$teachers = TeacherProfile::get();

    	$data = [
    		'title' => 'Teachers',
    		'panel' => 'admin',
    		'teachers' => $teachers
    	];

    	return view('admin.teacher.index', $data);
    }

    public function teacherBySchool(School $school)
    {    	
    	$teachers = TeacherProfile::where('school_id', $school->id)->get();

    	$data = [
    		'title' => 'Teachers',
    		'panel' => 'admin',
    		'school' => $school,
    		'teachers' => $teachers
    	];

    	return view('admin.teacher.index', $data);
    }

    public function show(School $school, TeacherProfile $teacher)
    {  
        $attendance = Attendance::where('date', date("Y-m-d"))->where('profile_teacher_id', $teacher->id)->first();

        $data = [
            'title' => 'Teacher Information',
            'panel' => 'admin',
            'school' => $school,
            'teacher' => $teacher,
            'attendance' => $attendance
        ];

        return view('admin.teacher.show', $data);
    }

    public function edit(School $school, TeacherProfile $teacher)
    {       
        $data = [
            'title' => 'Teacher Information',
            'panel' => 'admin',
            'school' => $school,
            'teacher' => $teacher
        ];

        return view('admin.teacher.edit', $data);
    }

    public function update(Request $request, School $school, TeacherProfile $teacher)
    {     
        $teacher->enrollid = $request->enrollid;
        $teacher->save();

        $teacher->user->name = $request->name;
        $teacher->user->phone = $request->phone;
        $teacher->user->save();

        $data = [
            'title' => 'Teacher Information',
            'panel' => 'admin',
            'school' => $school,
            'teacher' => $teacher
        ];

        $notification = ['success', 'Teacher successfully updated'];
        session()->flash('message', $notification);
        
        return redirect('/admin/panel/school/'.$school->id.'/teacher/'.$teacher->id.'/edit');
    }
}
