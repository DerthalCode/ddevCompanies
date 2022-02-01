<?php
use ToDo\Task;
use ToDo\Database;

$connect = Database::connect();
$task = new Task($connect);

require 'views/pages/all-companies.php';