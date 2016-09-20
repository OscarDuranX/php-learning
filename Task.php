<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 20/09/16
 * Time: 18:03
 */
class Task
{

    public $description;
    public $completed;

    public function __construct($description, $completed)
    {
        $this->description = $description;
        $this->completed = $completed;

    }

}