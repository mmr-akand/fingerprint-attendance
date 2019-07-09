<?php

namespace App\MyLibrary\UserLib\Login;

use Sentinel;

abstract class UserLogin
{
	protected $user = null;
	protected $error;

	public function getError() {
		return $this->error;
	}

	public function login($phone, $password)
	{
		$authenticated = $this->isAuthenticated($phone, $password);

		if (! ( $authenticated && $this->isAuthorizedRole() )) {
			// user should not be logged in
			if( $authenticated ){
				$user = Sentinel::getUser();
				Sentinel::logout($user);
			}			
			
			$this->user = null;
			return false;
		}
		return $this->user;
	}

	protected function isAuthenticated($phone, $password)
	{
		$credentials = [
		    'phone'    => $phone,
		    'password' => $password,
		];

		try {
		    $user = Sentinel::authenticate($credentials);

		    if ($user) {
	    		$this->user = $user;
	    		return true;
		    } else {
		    	$this->error['message'] = 'Incorrect username/password';
				$this->error['type'] = 'incorrect_login';
		    }
		}
		catch (\Exception $e) {
		    $this->error['message'] = 'Unexpected Error';
			$this->error['type'] = 'unknown_error';
		}
		return false;
	}

	abstract protected function isAuthorizedRole();
}