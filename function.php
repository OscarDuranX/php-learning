<?php

function hello($name, $sn1){
    echo "Hola " . $name. " " . $sn1 . " !";
}

function hellovtortosino($name, $sn1 = "Curto"){
    echo "Hola " . $name. " " . $sn1 . " !";
}

function printArgs($args){
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}

function suma($args){
    $numbers = func_get_args();

    return array_sum($numbers);
}

function connectBD(){
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','root','');
    }catch(PDOException $e) {
        die("Ha hagut un error duran la connexió: Missatge: " . $e->getMessage());
    }

    return $pdo;
}

function allTasks($pdo)
{
    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
}