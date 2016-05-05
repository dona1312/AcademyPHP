<?php
require_once 'header.php';
require_once "/repositories/UsersRepository.php";

/**
 * Created by PhpStorm.
 * User: dona
 * Date: 16.04.16
 * Time: 14:42
 */
$connection = new Connection();
//TO DO sticky footer

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['username']) && isset($_POST['password'])) {

    $username = htmlspecialchars(trim($_POST['username']));
    $pass = htmlspecialchars(trim($_POST['password']));

    $repo=new UsersRepository();
    $records = $repo->getByUsernameAndPassword($username,$pass);

    $results = $records->fetch(PDO::FETCH_ASSOC);

    $_SESSION['id'] = $results['id'];
    $_SESSION['isAdmin'] = $results['isAdmin'];

    
    header("Location: list_courses.php");
} else {
    
    header("Location: index.php?error=msg");
}
