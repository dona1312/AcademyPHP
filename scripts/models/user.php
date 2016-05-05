<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 3.5.2016 г.
 * Time: 14:00
 */
require_once 'base_model.php';
class User extends BaseModel{

    public $username;
    public $password;
    public $isAdmin;

    function getUsername(){
        return $this->username;
    }
    function setUsername($value){
        $this->username=$value;
    }
    function  getPassword(){
        return $this->password;
    }
    function  setPassword($value){
        $this->password=$value;
    }
    function getIsAdmin(){
        return $this->isAdmin;
    }
    function  setIsAdmin($value){
        $this->isAdmin=$value;
    }
}