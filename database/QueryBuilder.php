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