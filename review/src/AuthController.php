<?php namespace Acme;

class AuthController implements RespondsToUserRegistration
{
	protected $registration;

	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	public function register()
	{
		$this->registration->execute(['data',], $this);
	}

	public function userRegisteredSuccessfully()
	{
		var_dump('Created successfully.');
	}

	public function userRegisteredFailed()
	{
		var_dump('Creation failed.');
	}	
}