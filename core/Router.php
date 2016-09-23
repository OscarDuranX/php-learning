<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 23/09/16
 * Time: 15:58
 */
class Router
{
    /**
     * @var array
     */
    protected $routes = [];

    /**
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param $routes
     * @return static
     */
    public static function load($routes)
    {
        $router = new static;
        $router->routes = require $routes;
        return $router;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws Exception
     */
    public function direct($uri)
    {
        if(array_key_exists($uri,$this->routes)){
            return $this->routes[$uri];
        }
        else{
            throw new Exception("No s'ha trobat la ruta");
        }
    }

}