<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\TeacherProfile;
use App\School;
use App\Attendance;
use Sentinel;

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

    public function create(School $school)
    {       
        $data = [
            'title' => 'Create Teacher',
            'panel' => 'admin',
            'school' => $school
        ];

        return view('admin.teacher.create', $data);
    }

    public function store(Request $request)
    {    
        $school = School::find($request->school_id);

        if(count($school->teachers) == 0 && $request->designation == 0){
            $notification = ['danger', 'Please create head teacher first'];
            session()->flash('message', $notification);
            
            return redirect('/admin/panel/school/'.$school->id.'/teacher/create');
        }

        if(count($school->teachers) > 0 && $request->designation == 1){
            $notification = ['danger', 'Already there is a head teacher'];
            session()->flash('message', $notification);
            
            return redirect('/admin/panel/school/'.$school->id.'/teacher/create');
        }

        if($request->designation == 1){
            $this->createHeadTeacher($request);
        }else{
            $head = TeacherProfile::where('school_id', $school->id)->where('is_head_teacher', 'yes')->first();
            $this->createAssistantTeacher($request, $head);
        }

        $notification = ['success', 'Teacher successfully created'];
        session()->flash('message', $notification);
        
        return redirect('/admin/panel/school/'.$school->id.'/teacher/index');
    }

    private function createHeadTeacher($request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $enrollid = $request->enrollid;
        $schoolId = $request->school_id;

        $user = Sentinel::registerAndActivate([
            'name' => $name, 'phone' => $phone, 'password' => substr($phone, -6),
        ]);

        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);

        $head = TeacherProfile::create([
            'user_id'=>$user->id, 'enrollid'=>$enrollid, 'school_id'=>$schoolId,'is_head_teacher'=>'yes']);

        $head->parent_id = $head->id;
        $head->save();
    }

    private function createAssistantTeacher($request, $head)
    {
        $name = $request->name;
        $phone = $request->phone;
        $enrollid = $request->enrollid;
        $schoolId = $request->school_id;

        $user = User::create(['name' => $name, 'phone' => $phone, 'password'=>'1']);
        $tchr = TeacherProfile::create(['user_id'=>$user->id, 'enrollid'=>$enrollid, 'school_id'=>$schoolId]);
        $tchr->parent_id = $head->id;
        $tchr->save();
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
