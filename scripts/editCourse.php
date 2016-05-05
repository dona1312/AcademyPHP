<?php include 'header.php';
require_once 'filter.php';
require_once '/repositories/CoursesRepository.php';

/**
 * Created by PhpStorm.
 * User: B590
 * Date: 21.4.2016 г.
 * Time: 21:55 ч.
 */

if (isset($_GET['id']) && $_GET['id']) {

    $repository = new CoursesRepository();

    $id = (int)$_GET['id'];
    $result = $repository->getByID('courses',$id);

    $course_info = array();
    while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
        $name = $rows['name'];
        $desc=$rows['description'];
    }

    extract($course_info);
}
?>
<div class="wrapper">

    <form method="post" action="dbUpdateCourse.php">
        <div class="input-group">
            <h4>Course name:</h4>
            <input type="text" class="form-control" name="name" value="<?= $name?>" />
            <h4>Description:</h4>
            <textarea id="area" name="desc"  ><?= $desc?></textarea>
            <input type="hidden" name="id" value="<?= $id ?>"/>
            <input type="submit" value="Save" class="btn btn-primary"/>
        </div>
    </form>
</div>