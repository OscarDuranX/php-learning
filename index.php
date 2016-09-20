<?php

//$greeting = "Hola %_GET['name']!";

//require 'index.template.php';

//Estrcutres de dades:
// Arrays PHP totes les estrcuyutres : Maps, Piles, Vectors, Listes,  etc

//Declarar arrays
// 1- $names = array();
// 2- $names = ['Santiago', 'Compostela', 'Sonotone'];


//$names = [
//    'name' => 'Santiago',
//    'sn1' => 'Compostela',
//    'sn2' => 'Sonotone',
//    'edad' => 38,
//    'married' => true
//];
//
//$person = [
//    'name' => 'Santiago',
//    'sn1' => 'Compostela',
//    'sn2' => 'Sonotone',
//    'edad' => 38,
//    'married' => true
//];

//var_dump($names);
//print_r($names);
//echo $names;

//echo "<ul>";
//foreach ($names as $name) {
//    echo "<li>$name</li>";
//}
//echo "</ul>";

//echo $names[0];
//
//echo $person['sn1'];
//
//$married = true;
//$married = false;

//copy($src,$dst);
//
//
//function hello($name, $sn1){
//    echo "Hola " . $name. " " . $sn1 . " !";
//}

require 'function.php';


//$task = new Task();
$task = new Task("Aprendre PHP",false);
var_dump($task ->description);
var_dump($task ->completed);

//var_dump($task);

require 'index.template.php';