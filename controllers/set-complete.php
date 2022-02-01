<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$task = new Task(Database::connect());
$task->setComplete(intval(basename(Request::uri())));

//crud
//c - create
//r - read
//u - update
//d - delete