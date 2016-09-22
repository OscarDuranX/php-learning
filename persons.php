<?php

require 'functions.php';

require 'Person.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// PDO: Php Data Objects

//$pdo = connectBD();


$config = require 'config/database.php';
$message = require 'config/message.php';


$pdo = Connection::make($config,$message);

$query = new QueryBuilder($pdo);

$persons = $query->all('Persons');


require 'persons.template.php';