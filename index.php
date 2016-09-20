<?php

require 'function.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// PDO: Php Data Objects

//$pdo = connectBD();

$pdo = Connection::make();

$query = new QueryBuilder();

$tasks = $query->all($pdo,'todos');

//$tasks = Task::all();
require 'index.template.php';