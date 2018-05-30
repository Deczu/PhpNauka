<?php

require 'Task.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';
require 'functions.php'; //to kurwa działa potem przy QB się coś jebie nie wiem ocb
$pdo=connection::make();
//$tasks=fetchAllTasks($pdo);
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');







require 'index.view.php';