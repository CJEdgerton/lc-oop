<?php

class Person {
	
	private $name;
	private $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $this->setAge($age);
	}

	public function getAge() {
		return $this->age * 365;
	}

	public function setAge($age) {

		if($age < 18) {
			throw new Exception("Error Processing Request");
		}

		$this->age = $age;
	}
}

$john = new Person('John Doe', 58);
$john->setAge(20);

// $john->age = 10;

var_dump($john->getAge());