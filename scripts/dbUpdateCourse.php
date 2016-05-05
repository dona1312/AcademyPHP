<?php include '/repositories/CoursesRepository.php';
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
if($_POST && isset($_POST['name']) && isset($_POST['id']) && isset($_POST['desc'])) {

    $repository = new CoursesRepository();
    $course=new Course();

    $id=$_POST['id'];
    $name =htmlspecialchars( $_POST['name']);
    $desc=htmlspecialchars( $_POST['desc']);

    $course->setID($id);
    $course->setName($name);
    $course->setDescription($desc);
    
    $result = $repository->save($course); 

    if ($result) {
        header("Location: list_courses.php");
    } else {
        echo "Error";
    }
}