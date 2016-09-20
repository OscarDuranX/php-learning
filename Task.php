<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 20/09/16
 * Time: 18:03
 * POPO: Plain Old PHP Object | Contenedor de tasques | Model
 */
class Task
{
    protected $description;

    private $completed;

    public function __construct($description, $completed)
    {
        $this->description = $description;
        $this->completed = $completed;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function description($description)
    {
        $this->description = $description;
    }


    public function completed()
    {
        return $this->completed;
    }



}