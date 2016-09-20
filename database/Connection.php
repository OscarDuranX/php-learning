<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 20/09/16
 * Time: 21:24
 */
class Connection
{

    public static function make()
    {
        try{
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','root','');
            return $pdo;
        }catch(PDOException $e) {
            die("Ha hagut un error duran la connexió: Missatge: " . $e->getMessage());
        }

    }

}