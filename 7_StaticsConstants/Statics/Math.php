<?php

class Math
{
	// Static keyword allows us to call a method without instantiating the parent class.
	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

// $math = new Math;
// var_dump($math->add(1,2,3,4));

echo Math::add(1,2,3,4);