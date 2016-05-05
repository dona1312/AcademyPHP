<?php 
require_once '/repositories/CoursesRepository.php';
require_once '/models/course.php';
require_once 'filter.php';
?>
<?php
/**
 * Created by PhpStorm.
 * User: B590
 * Date: 24.4.2016 г.
 * Time: 22:17 ч.
 */
if($_POST && isset($_POST['name'])&& isset($_POST['desc'])) {

    $repository = new CoursesRepository();
    $name =htmlspecialchars( $_POST['name']);
    $desc=htmlspecialchars( $_POST['desc']);

    $course=new Course();
    $course->setName($name);
    $course->setDescription($desc);
    
    $result =$repository->save($course);

    if ($result) {
       header("Location:list_courses.php");
    } else {
        echo "Error";
    }
}