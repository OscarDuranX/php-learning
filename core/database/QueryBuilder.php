<?php

class QueryBuilder {
    /**
     * @var PDO
     */
    public $pdo;
    /**
     * QueryBuilder constructor.
     *
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    // Dependency injection
    /**
     *
     * Fetch all resources on table.
     *
     * @param $table
     * @return array
     */
    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }

    function insertPerson($table,$dades)
    {
        $query = $this->pdo->prepare("INSERT into {$table} VALUES ({$dades})");
        $query->execute();
        return $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }


}