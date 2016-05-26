<?php

interface CastsToJson
{
	public function toJson();
}

class User implements CastsToJson
{
	public function toJson()
	{

	}
}

class collection implements CastsToJson
{
	public function toJson()
	{
		
	}
}
