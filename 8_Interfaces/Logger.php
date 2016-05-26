<?php

interface Logger
{
	public function executes($message);
}

class LogToFile implements Logger
{
	public function executes($message)
	{
		var_dump('log the message to a file: ' . $message);
	}
}

class LogToDatabase implements Logger
{
	public function executes($message)
	{
		var_dump('log the message to a database: ' . $message);
	}
}

//...

class UsersController
{
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'John Doe';

		// Log this information
			// This is bad practice... so let's pass the it in through the constructor.
			// new LogToFile; 

			$this->logger->executes($user);

	}
}

$controller = new UsersController(new LogToDatabase);

$controller->show();