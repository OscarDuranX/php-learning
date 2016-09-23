<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 23/09/16
 * Time: 15:58
 */
class Router
{

    protected $routes = [];

    public function define($rutes)
    {
        $this->routes = $rutes;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri,$this->routes)){
            require $this->routes[$uri];
        }
        else{
            throw  new Exception("No s'ha trobat la ruta");
        }
    }

}