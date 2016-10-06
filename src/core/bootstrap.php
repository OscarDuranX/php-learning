<?php


//require 'functions.php';
//require 'Models/Task.php';
//require 'database/Connection.php';
//require 'database/QueryBuilder.php';

use oscarduranx\Myframework\controllers\tasks;
use oscarduranx\Myframework\core\database\Connection;
use oscarduranx\Myframework\core\database\QueryBuilder;


$config = require 'config/database.php';
$message = require 'config/message.php';

$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);