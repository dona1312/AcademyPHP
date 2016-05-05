<?php include 'header.php';
include '/repositories/UsersRepository.php';
require_once '/models/user.php';
require_once 'filter.php';?>

<?php
/**
 * Created by PhpStorm.
 * User: B590
 * Date: 21.4.2016 г.
 * Time: 21:55 ч.
 */

if (isset($_GET['id']) && $_GET['id']) {

    $repo = new UsersRepository();

    $id = (int)$_GET['id'];
    $result = $repo->getByID('users',$id);

    $course_info = array();
    while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
        $username= $rows['username'];
        $password =$rows['password'];
    }

    extract($course_info);
}
?>
<form method="post" action="dbUpdateUser.php">
    Username:<input type="text" name="username" value="<?= $username ?>" placeholder="Insert name"/>
    Password:<input type="text" name="password" value="<?= $password ?>" placeholder="Insert name"/>
    <input type="hidden" name="id" value="<?=$id?>"/>
    <input type="submit" value="Save"/>
</form>