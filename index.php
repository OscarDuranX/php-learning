<?php

require 'function.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// PDO: Php Data Objects

//$pdo = connectBD();

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->all('todos');

//$tasks = Task::all();
require 'index.template.php';