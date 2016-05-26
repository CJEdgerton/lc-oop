<?php

interface Repository
{
	public function save($data);
}

class MongoRepository implements Repository
{
	public function save($data)
	{
		// Procedure for saving to MongoDB
	}
}

class FileRepository implements Repository
{
	public function save($data)
	{
		// Procedure for saving to file
	}
}