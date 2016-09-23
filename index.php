<?php

require "core/bootstrap.php";


require "core/Router.php";
require "core/Request.php";

$uri = Request::uri();

$routes = require "routes.php";

$router = new Router;
$router->define($routes);
$router->direct($uri);

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

// FC Front Controller