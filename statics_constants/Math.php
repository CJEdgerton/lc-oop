<?php

class Math
{
	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

// $math = new Math;
// var_dump($math->add(1,2,3));

echo Math::add(1,2,3);