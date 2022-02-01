<?php
use ToDo\Task;
use ToDo\Database;


/* $connect = Database::connect();
$task = new Task($connect); */
//var_dump($_POST);

if(isset($_POST['ieskoti'])){
    $search=$_POST['search']; 
    $connect = Database::connect();   
    $task= new Task($connect);
    $ats=$task->companiesSearch($search);
    // var_dump($ats);
    // echo"<pre>";print_r($ats);echo"</pre>";
}

require 'views/pages/home.view.php';