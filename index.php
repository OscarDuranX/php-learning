<?php

require "core/bootstrap.php";

require "core/Request.php";
require "core/Router.php";

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

require Router::load('routes.php')->direct(Request::uri());
