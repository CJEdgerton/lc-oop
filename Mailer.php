<?php

abstract class Mailer {

	// abstract protected function send($to, $from, $body);	

}

class UserMailer extends Mailer {

	protected $from = 'yourfriendlyAdmin@something.com';
	protected $body = 'Hi there';

	// public function sendWelcomeEmail(User $user) {
		// return $this->send($user->email, $this->from, $this->body);
	// }		

}

class User {

	protected $email;

	public function __construct() {
		$this->email = 'someEmail@something.com';
	}

	public function getEmail() {
		return $this->email;
	}
}

echo (new User)->getEmail();