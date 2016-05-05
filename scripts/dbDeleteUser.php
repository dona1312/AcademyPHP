<?php include 'header.php';
require_once '/repositories/UsersRepository.php';
require_once 'filter.php';
?>

<?php
/**
 * Created by PhpStorm.
 * User: B590
 * Date: 23.4.2016 г.
 * Time: 17:37 ч.
 */
if ($_GET && isset($_GET['id'])) {

    $repository = new UsersRepository();

    $id = (int)$_GET['id'];
    $result = $repository->delete('users',$id);

    if ($result) {
        header("Location:list_users.php");
    } else {
        echo "Error";
    }
}