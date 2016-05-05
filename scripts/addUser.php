<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 10:36
 */

require_once '/repositories/UsersRepository.php';
require_once '/models/user.php';
require_once 'filter.php';

if ($_POST && isset($_POST['username']) && isset($_POST['password'])){
    $repo=new UsersRepository();
    $user=new User();

    $username=htmlspecialchars(trim($_POST['username']));
    $pass=htmlspecialchars(trim($_POST['password']));
    $isAdmin=false;

    $user->setUsername($username);
    $user->setPassword($pass);
    $user->setIsAdmin($isAdmin);

    $result=$repo->save($user);

    if ($result) {
        header("Location:form.php");
    } else {
        echo "Error";
    }
}