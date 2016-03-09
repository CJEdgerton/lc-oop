<?php

class Person {
	protected $name;	

	public function __construct($name) {
		$this->name = $name; 
	} 
}

class Business {

	protected $staff;

	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}

	public function hire(Person $person) {

		$this->staff->add($person);

	}

	public function getMembers() {
		return $this->staff->members();
	}
	
}

class Staff {

	protected $members = [];

	public function __construct($members = []) {
		$this->members = $members;

	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members() {
		return $this->members;
	}

}

$jeff = new Person('Jeff');

$staff = new Staff([$jeff]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Tsuchi'));

var_dump( $laracasts->getMembers() );
