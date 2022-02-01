<?php

use ToDo\Database;
use ToDo\Task;
use ToDo\Validation;

if(isset($_POST['save'])){
    //  echo "<pre>";print_r($_POST);echo "</pre>";
    // exit; 
    $validationErrors = Validation::validateTask($_POST);  //kreipiasi i validation klase
    if(count($validationErrors) > 0)
    {
        $error = $validationErrors;
    }else{
        $connection = Database::connect();  //conncet to db
        $task = new Task($connection);    //create task object
        $task->createTask($_POST);       //pass form data to Task object
    }
    
}
unset($_POST);
require 'views/pages/add-task.view.php';