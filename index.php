<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// PDO: Php Data Objects

//$pdo = connectBD();


$config = require 'config/database.php';
$message = require 'config/message.php';


$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);

$tasks = $query->all('todos');

//$tasks = Task::all();
require 'index.template.php';