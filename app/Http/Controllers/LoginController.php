<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class LoginController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function dashboard()
    {
    	return view('dashboard');
    }

    public function testGet()
    {
    	Division::create(['name'=>'hello']);
    	dd("get successfull");
    }

    public function testPost(Request $request)
    {
    	Division::create(['name'=>'hello post']);
    	dd("post successfull");
    }
}
