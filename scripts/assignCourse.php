<?php
require_once 'header.php';
require_once '/repositories/UsersRepository.php';
require_once '/models/user.php';
require_once '/models/course.php';
require_once 'filter.php';
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 11:40
 */


if ($_GET && isset($_GET['id'])){
    $user=new User();
    $course=new Course();

    $course_id=(int)$_GET['id'];
    $user_id=$_SESSION['id'];

    $user->setID($user_id);
    $course->setID($course_id);


    $repository=new UsersRepository();
    $result=$repository->AssignToCourse($user,$course);

    header("Location: myCourses.php");

}
else{
    echo'Error';
}

