<?php

/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 3.5.2016 г.
 * Time: 14:13
 */
require_once 'base_model.php';
class Course extends BaseModel
{

    public $name;
    public $description;

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }
}