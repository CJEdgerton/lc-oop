<?php

class Person 
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}	
}

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

class Staff
{
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function members()
	{
		return $this->members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;	
	}
	
}

$chris = new Person('Chris');

$staff = new Staff([$chris]);

$laracasts =  new Business($staff);

$laracasts->hire( new Person('John Doe') );

var_dump( $laracasts->getStaffMembers() );