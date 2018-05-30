<?php
require 'database/connection.php';
require 'database/QueryBuilder.php';
//$tasks=fetchAllTasks($pdo);
return new QueryBuilder(connection::make());