<?php

//return [
//    ''              => 'controllers/tasks.php',
//    'about'         => 'controllers/about.php',
//    'contact'       => 'controllers/contact.php',
//    'persons'       => 'controllers/persons.php',
//    'add/person'    => 'controllers/addperson.php',
//    'names'         => 'controllers/names.php',
//
//];

$router->get('', 'controllers/tasks.php' );

$router->get('about', 'controllers/about.php' );

$router->get('contact', 'controllers/contact.php' );

$router->get('persons', 'controllers/persons.php' );

$router->get('add/person', 'controllers/addperson.php' );

$router->post('names', 'controllers/names.php' );



