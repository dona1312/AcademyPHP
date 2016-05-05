<?php include '/repositories/UsersRepository.php';
require_once '/models/user.php';
require_once 'filter.php';
?>
<?php
/**
 * Created by PhpStorm.
 * User: B590
 * Date: 24.4.2016 г.
 * Time: 22:17 ч.
 */

if($_POST && isset($_POST['username']) && isset($_POST['id']) && isset($_POST['password'])) {

    $repository=new UsersRepository();
    $user=new User();

    $id=$_POST['id'];
    $username =htmlspecialchars( $_POST['username']);
    $password =htmlspecialchars( $_POST['password']);

    $user->setID($id);
    $user->setUsername($username);
    $user->setPassword($password);


    $result = $repository->save($user);

    if ($result) {
        header("Location: list_users.php");
    } else {
        echo "Error";
    }
}