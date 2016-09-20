<?php

require 'Connection.php';
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 20/09/16
 * Time: 21:33
 */
class QueryBuilder
{
    public $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Collaborators / Dependencies

    // Dependency injection

    /**
     * @param Connection $pdo
     * @param $table
     * @return mixed
     * type hinting
     */
    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $tasks = $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }

}

class Contract{

    public $arquitecte;
    public $paletes;
    public $lampista;

    /**
     * Contract constructor.
     * @param $arquitecte
     * @param $paletes
     * @param $lampista
     */
    public function __construct($arquitecte, $paletes, $lampista)
    {
        $this->arquitecte = $arquitecte;
        $this->paletes = $paletes;
        $this->lampista = $lampista;
    }

    public function buildHome()
    {
        $arquitecte->disenyar();
        $paletes->construir();
        $lampista->work()
    }
}