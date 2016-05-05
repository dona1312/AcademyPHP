<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 4.5.2016 г.
 * Time: 13:39
 */
require_once 'conn.php';

class BaseRepository
{

    function getAll($dbTable)
    {
        $connection = new Connection();
        $result = $connection->returnQueryResult("SELECT * FROM `$dbTable`");

        return $result;
        die();
    }
    function getByID($dbTable,$id)
    {
        $connection = new Connection();
        $result = $connection->returnQueryResult("SELECT * FROM `$dbTable` WHERE `id`=$id");

        return $result;

    }
    function delete($dbTable,$id)
    {
        $connection = new Connection();
        $result = $connection->returnQueryResult("DELETE FROM `$dbTable` WHERE `id`=$id");

        return $result;
        die();
    }
}
