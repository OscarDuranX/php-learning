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