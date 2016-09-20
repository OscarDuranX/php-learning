<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 20/09/16
 * Time: 21:33
 */
class QueryBuilder
{

    /**
     * @param Connection $pdo
     * @param $table
     * @return mixed
     * type hinting
     */
    function all(Connection $pdo, $table)
    {
        $query = $pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $tasks = $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }

}