<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\Union;

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
}
