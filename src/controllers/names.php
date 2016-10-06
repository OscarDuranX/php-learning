<?php


//echo "Hola " . $_POST['name'];


$query->insertPerson('Persons',[

    'name'      => $_POST['name'],
    'midlename' =>   $_POST['midlename'],
    'lastname'      => $_POST['lastname'],


]
);


header('Location: /');