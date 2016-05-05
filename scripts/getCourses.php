<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 3.5.2016 г.
 * Time: 10:33
 */
require_once 'header.php';

require_once '/models/course.php';
require_once '/repositories/CoursesRepository.php';

$repository=new CoursesRepository();
$result=$repository->getAll('courses');
$course_info = array();

while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
    $course_info['id'][] = $rows['id'];
    $course_info['name'][] = $rows['name'];
    $course_info['description'][] = $rows['description'];
}

extract($course_info);

?>
    <div class="wrapper">

<!--        <table border=1 class="table table-hover table-condensed table-responsive">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Name</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
            <?php

            foreach ($id as $key => $value) {
                echo '
                <div class="card" >
            <h4 class="card-title" > '.$name[$key] .'</h4 >
            <p class="card-body" > '.$description[$key].'</p >
        </div >';
}
//            foreach ($id as $key => $value) {
//                echo '<tr>
//                    <td>
//                    <div>
//                    <div class="key">
//                    '. $name[$key] . '
//                    </div>
//                    <div class="description" style="display:none;">
//                    ' . $description[$key] . '
//                    </div>
//                    </div>
//                </td></tr>';
//            }
            ?>
            </tbody>

        </table>
    </div>


<?php include 'footer.php' ; ?>
<script>
    $(document).ready(function () {
        $(".key").hover(function () {

            $(this).next().toggle();
        });
    });
</script>
