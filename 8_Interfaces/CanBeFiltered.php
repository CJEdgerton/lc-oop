<?php

interface CanBeFiltered
{
	public function filter();
}

class Favorited implements CanBeFiltered
{
	public function filter()
	{
		// filter logic here
	}
}

class Unwatched implements CanBeFiltered
{
	public function filter()
	{
		// filter logic here
	}
}

class Difficulty implements CanBeFiltered
{
	public function filter()
	{
		// filter logic here
	}
}