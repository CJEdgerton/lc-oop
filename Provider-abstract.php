<?php

abstract class Provider
{
	abstract protected function getAuthorizationUrl();
}

class FacebookProvider extends Provider
{
	protected function getAuthorizationUrl()
	{
		return 'some/url';
	}
}

class TwitterProvider extends Provider
{
	protected function getAuthorizationUrl()
	{
		return 'some/other/url';
	}
}