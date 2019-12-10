<?php

namespace App\MyLibrary\UserLib\Login;

use Sentinel;

class DashboardLogin extends UserLogin
{
	protected function isAuthorizedRole()
	{
		$user = $this->user;

        $user_role_profile = $this->getUserRoleProfile();
        if ($user_role_profile) {
            return true;
        }

    	$this->error['message'] = 'Sorry! there is no dashboard for teachers';
		$this->error['type'] = 'incorrect_role';

        return false;
	}


    /**
     * which type of user id he?
     */
    private function getUserRole()
    {
        $user = $this->user;

        $admin = Sentinel::findRoleBySlug('super-admin');
        $dpeo = Sentinel::findRoleBySlug('dpeo');
        $adpeo = Sentinel::findRoleBySlug('adpeo');
        $teo = Sentinel::findRoleBySlug('teo');
        $ateo = Sentinel::findRoleBySlug('ateo');
        $teacher = Sentinel::findRoleBySlug('teacher');

        if ($user->inRole($admin)) {
            return 'admin';
        } elseif ($user->inRole($dpeo)) {
            return 'dpeo';
        } elseif ($user->inRole($adpeo)) {
            return 'adpeo';
        } elseif ($user->inRole($teo)) {
            return 'teo';
        } elseif ($user->inRole($ateo)) {
            return 'ateo';
        } elseif ($user->inRole($teacher)) {
            return 'teacher';
        }
        
        return false;
    }

    /**
     * database profile for this user
     */
    private function getUserRoleProfile()
    {
        $user = $this->user;

        $role = $this->getUserRole();

        $rel_name = $role.'Profile';
        $profile = $user->$rel_name;

        return $profile;
    }
}