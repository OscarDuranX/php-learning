<?php

namespace oscarduranx\Myframework\core;

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
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * @param $routes
     */
//    public function define($routes)
//    {
//        $this->routes = $routes;
//    }

    /**
     * @param $routes
     * @return static
     */
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {

        if(array_key_exists($uri,$this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }
        else{
            throw new Exception("No s'ha trobat la ruta");
        }
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

}