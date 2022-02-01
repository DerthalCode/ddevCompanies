<?php 

$router->define([
    '/'=>'controllers/home.php',
    '/add-task'=>'controllers/add-task.php',
    '/all-companies'=>'controllers/all-companies.php',
    '/delete-task'=>'controllers/delete-task.php',
    '/set-complete'=>'controllers/set-complete.php',
    '404'=>'controllers/404.php'
]);