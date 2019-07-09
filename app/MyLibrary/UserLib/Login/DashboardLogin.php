<?php

namespace App\MyLibrary\UserLib\Login;

use Sentinel;

class DashboardLogin extends UserLogin
{
	/**
	 * is the user an customer, admin or owner?
	 */
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

        $adminRole = Sentinel::findRoleBySlug('super-admin');
        $ownerRole = Sentinel::findRoleBySlug('dpeo');
        $customerRole = Sentinel::findRoleBySlug('adpeo');
        $customerRole = Sentinel::findRoleBySlug('teo');
        $customerRole = Sentinel::findRoleBySlug('ateo');
        $customerRole = Sentinel::findRoleBySlug('teacher');

        if ($user->inRole($adminRole)) {
            return 'admin';
        } elseif ($user->inRole($ownerRole)) {
            return 'dpeo';
        } elseif ($user->inRole($customerRole)) {
            return 'adpeo';
        } elseif ($user->inRole($customerRole)) {
            return 'teo';
        } elseif ($user->inRole($customerRole)) {
            return 'ateo';
        } elseif ($user->inRole($customerRole)) {
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