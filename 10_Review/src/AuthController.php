<?php

namespace Acme;

class AuthController implements RespondsToUserRegistration
{

	protected $registration;

	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	// Used constructor injection
	public function register()
	{

		// Pass in this object and we can access it's methods from called class
		$this->registration->execute([], $this);

	}

	// Method Injection
	public function renew(RenewsUser $renewal)
	{
		$this->renewal->execute();
	}

	// These methods are in controller because they can handle reacting, and communicating to view 
		public function userRegisteredSuccessfully()
		{
			var_dump('created successfully. redirect somewhere.');
		}

		public function userRegisteredFailed()
		{
			var_dump('created unsuccessfully. redirect back');
		}
}