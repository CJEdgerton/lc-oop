<?php

abstract class Provider
{
	// Enforces any subclass to implement this method.
	abstract protected function getAuthorizationUrl();	
}

class FacebookProvider extends Provider
{
	protected function getAuthorizationUrl()
	{
		return '';
	}
}