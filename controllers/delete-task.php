<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$id= intval(basename(Request::uri())); //get id
$connection = Database::connect();//connect to db
$task = new Task($connection);//task object instance
$task->deleteTask($id);//execute delete from db action 

