<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 23/09/16
 * Time: 15:47
 */
class Request
{

    public static function uri()
    {
        return urldecode(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );
//        return trim($_SERVER['REQUEST_URI'],'/');
    }

}