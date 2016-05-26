<?php

// Bad Person - using static properties improperly.
class Person
{
	public static $age = 1;

	public function haveBirthday()
	{

		// This doesn't work because $age is static
		// $this->age ++;

		static::$age ++;
	}
}

$joe = new Person;
$joe->haveBirthday();

$jane = new Person;
$jane->haveBirthday();

echo Person::$age;