<?php

require 'function.php';

require 'Task.php';

// PDO: Php Data Objects

$pdo = connectBD();

$tasks = allTasks($pdo);

//$tasks = Task::all();
require 'index.template.php';