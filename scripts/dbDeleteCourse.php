<?php include 'header.php' ?>
<?php include '/repositories/CoursesRepository.php';
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

    $repository = new CoursesRepository();

    $id = (int)$_GET['id'];
    $result = $repository->delete('courses',$id);

    if ($result) {

       // echo 'success';
        header("Location:list_courses.php");
    } else {
        echo "Error";
    }
}