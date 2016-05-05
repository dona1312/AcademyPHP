<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 3.5.2016 г.
 * Time: 10:46
 */
require_once 'header.php';

if (!isset($_SESSION['id'])){
    header("Location: error.php");
}