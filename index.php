<?php



require __DIR__ . 'vendor/autoload.php';


require "src/core/bootstrap.php";

use oscarduranx\Myframework\core\Request;
use oscarduranx\Myframework\core\Router;

//$uri = Request::uri();
//
//$routes = require "routes.php";
//
//$router = new Router;
//$router->define($routes);
//require  $router->direct($uri);

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

// FC Front Controller

require Router::load('routes.php')

    ->direct(Request::uri(), Request::method());
