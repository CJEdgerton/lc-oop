<?php

class Task {

	public $title;
	public $description;
	public $completed = false;

	public function __construct($title, $description) {
		$this->description = $description;
	}

	public function complete() {
		$this->completed = true;
	}
}

$task = new Task('Hi', 'Some content');
$task->complete();

$task2 = new Task('Hello', 'Some other description');
$task2->complete();

var_dump($task2->description);