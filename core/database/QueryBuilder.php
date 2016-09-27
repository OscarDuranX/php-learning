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


        $sql = sprintf(

            'insert into %s (%s) values (%s)',

            $table,

            implode(', ', array_keys($dades)),

            ':' . implode(', :', array_keys($dades))

            );

        var_dump($dades);

        try{
                $query = $this->pdo->prepare($sql);

                $query->execute($dades);

        } catch (Exception $e){
            die('Whoooops, something went wrong.');
        }
    }


}