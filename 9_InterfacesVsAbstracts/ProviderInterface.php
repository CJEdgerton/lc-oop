<?php

interface Provider
{
	public function authorize();
}

class FacebookProvider implements Provider
{
	public function authorize()
	{
		//
	}
}

function login(Provider $provider)
{
	$provider->authorize();
}
