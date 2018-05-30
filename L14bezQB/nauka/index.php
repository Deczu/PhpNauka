<?php

require 'Task.php';
require 'database/connection.php';
//require 'database/QueryBuilder.php';
require 'functions.php';
$pdo=connection::make();
$tasks=fetchAllTasks($pdo);
//query = new QueryBuilder($pdo);
//die(var_dump($pdo));
//$tasks = $query->selectAll('todos');
//die(var_dump($tasks));



require 'index.view.php';