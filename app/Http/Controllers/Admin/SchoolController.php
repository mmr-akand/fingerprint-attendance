<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\Union;
use App\TeacherProfile;
use App\User;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::get();

        $data = [
            'title' => 'Schools',
            'panel' => 'admin',
            'schools' => $schools
        ];

        return view('admin.school.index', $data);
    }

    public function create(Union $union)
    {
        $data = [
            'title' => 'Create School',
            'panel' => 'admin',
            'union' => $union
        ];

        return view('admin.school.create', $data);
    }

    public function store(Request $request)
    {
        $school = School::create([
            'name' => $request->name,
            'address' => $request->address,
            'union_id' => $request->union_id,
            'deviceid' => $request->deviceid,
            'upazila_id' => 1,
            'profile_teo_id' => 1
        ]);

        $notification = ['success', 'School successfully created'];
        session()->flash('message', $notification);
        
        return redirect('/admin/panel/school/'.$school->id.'/teacher/index');
    }

    public function schoolByUnion(Union $union)
    {
    	$schools = School::where('union_id', $union->id)->get();

    	$data = [
    		'title' => 'Schools',
    		'panel' => 'admin',
    		'schools' => $schools,
    		'union' => $union
    	];

    	return view('admin.school.index', $data);
    }

    public function edit(School $school)
    {
        $data = [
            'title' => $school->name,
            'school' => $school,
            'panel' => 'admin',
        ];

        return view('admin.school.edit', $data);
    }

    public function update(Request $request, School $school)
    {
        $school->name = $request->name;
        $school->deviceid = $request->deviceid;
        $school->address = $request->address;
        $school->save();

        $data = [
            'title' => $school->name,
            'school' => $school,
            'panel' => 'admin',
        ];

        $notification = ['success', 'School successfully updated'];
        session()->flash('message', $notification);
        
        return redirect('/admin/panel/school/'.$school->id.'/edit');
    }

    public function delete(School $school)
    {
        $userIds = $school->teachers->pluck('user_id')->toArray();

        TeacherProfile::whereIn('id', $school->teachers->pluck('id')->toArray())->delete();
        User::whereIn('id', $userIds)->delete();
        $school->delete();

        $notification = ['success', 'School successfully deleted'];
        session()->flash('message', $notification);
        return redirect('/admin/panel/dashboard');
    }
}
