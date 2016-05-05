<?php

class BaseModel
{
    public $ID;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($id)
    {
        $this->ID = $id;
    }
}
