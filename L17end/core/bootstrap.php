<?php

$app = [];


$app['config'] = require 'config.php';

require 'Router.php';
require 'Request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
//$tasks=fetchAllTasks($pdo);
$app['database'] = new QueryBuilder(connection::make($app['config']['database']));