<?php

//$greeting = "Hola %_GET['name']!";

//require 'index.template.php';

//Estrcutres de dades:
// Arrays PHP totes les estrcuyutres : Maps, Piles, Vectors, Listes,  etc

//Declarar arrays
// 1- $names = array();
// 2- $names = ['Santiago', 'Compostela', 'Sonotone'];


$names = [
    'name' => 'Santiago',
    'sn1' => 'Compostela',
    'sn2' => 'Sonotone',
    'edad' => 38,
    'married' => true
];

$person = [
    'name' => 'Santiago',
    'sn1' => 'Compostela',
    'sn2' => 'Sonotone',
    'edad' => 38,
    'married' => true
];

//var_dump($names);
//print_r($names);
//echo $names;

//echo "<ul>";
//foreach ($names as $name) {
//    echo "<li>$name</li>";
//}
//echo "</ul>";

echo $names[0];

echo $person['sn1'];

$married = true;
$married = false;

require 'index.template.php';