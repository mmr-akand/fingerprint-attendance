<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibrary\UserLib\Login\DashboardLogin;

class SessionController extends Controller
{
    public function create()
    {
        $user = Sentinel::getUser();

        if($user){
            $dashboard = $this->getUserDashboard($user);
            return redirect($dashboard);
        }

    	return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required',
        ]);

        $phone = $request->phone;
        $pass = $request->password;

        $login_manager = new DashboardLogin();
        $user = $login_manager->login($phone,$pass);


        if ($user) {
            // redirect to high priority role's panel 
            $user_roles = $user->roles;
            $dashboard = $this->getUserDashboard($user);
            
            return redirect($dashboard);
        } else {
            $error = $login_manager->getError();
    
            // inactive user or incorrect user/pass
            $notification = ['danger',$error['message']];
            session()->flash('message', $notification);
            return redirect()->back();
        }
    }


    public function redirectToDashBoard()
    {
        $user = Sentinel::getUser();
        $dashboard = $this->getUserDashboard($user);
            
        return redirect($dashboard);
    }

    /**
     * logout the user
     */
    public function logout()
    {
        Sentinel::logout();

        return redirect('/session/login');
    }

    private function getUserDashboard($user)
    {
        $adminRole = Sentinel::findRoleBySlug('super-admin');
        $dpeoRole = Sentinel::findRoleBySlug('dpeo');
        $adpeoRole = Sentinel::findRoleBySlug('adpeo');
        $teoRole = Sentinel::findRoleBySlug('teo');
        $ateoRole = Sentinel::findRoleBySlug('ateo');
        $teacherRole = Sentinel::findRoleBySlug('teacher');

        if ($user->inRole($adminRole)) {
            $dashboard = 'admin/panel/dashboard';
        } elseif ($user->inRole($dpeoRole)) {
            $dashboard = 'dpeo/panel/dashboard';
        } elseif ($user->inRole($adpeoRole)) {
            $dashboard = 'adpeo/panel/dashboard';
        } elseif ($user->inRole($teoRole)) {
            $dashboard = 'teo/panel/dashboard';
        } elseif ($user->inRole($ateoRole)) {
            $dashboard = 'ateo/panel/dashboard';
        } elseif ($user->inRole($teacherRole)) {
            $dashboard = 'teacher/panel/dashboard';
        }

        return $dashboard;
    }
}
