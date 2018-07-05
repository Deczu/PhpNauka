<?php

//require 'Task.php';
//require 'functions.php'; //to kurwa działa potem przy QB się coś jebie nie wiem ocb
$database = require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';
//var_dump($uri);
//$uri = 'about/culture';
//require  $router->direct($uri);

require Router::load('routes.php')->direct(Request::uri());