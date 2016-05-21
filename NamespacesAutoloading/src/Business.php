<?php

namespace Acme;

use Acme\Users\Person;

class Business
{
	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}

	public function hire(Person $person)	
	{
		$this->staff->add($person);
	}
}

