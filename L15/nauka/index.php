<?php

require 'Task.php';
require 'functions.php'; //to kurwa działa potem przy QB się coś jebie nie wiem ocb
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';