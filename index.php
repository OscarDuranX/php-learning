<?php

require 'function.php';

require 'Task.php';

// PDO: Php Data Objects
try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','root','');
}catch(PDOException $e) {
    die("Ha hagut un error duran la connexió: Missatge: " . $e->getMessage());
}

$query = $pdo->prepare('SELECT * FROM todos');

$query-> execute();


$tasks= $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Task::class);

require 'index.template.php';