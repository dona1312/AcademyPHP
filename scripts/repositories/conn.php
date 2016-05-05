<?php

/**
 * Created by PhpStorm.
 * User: dona
 * Date: 16.04.16
 * Time: 13:42
 */
class Connection
{

    private $username = "root";
   // private $password = "donapass";
    private $password = "";
    private $dbName='academy_db';
    private $conn;

    function returnQueryResult( $query){

        try{
            $conn = new PDO($url = "mysql:dbname=$this->dbName;host=127.0.0.1", $this->username, $this->password);
        }catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        try{
            $result = $conn->query($query);
        }catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
            $conn=null;
        }


        $conn=null;
        return $result;
    }
}