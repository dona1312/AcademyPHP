<?php
require_once 'header.php';
require_once 'users_filter.php';
require_once '/repositories/UsersRepository.php';
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 11:58
 */

$repository=new UsersRepository();
$result=$repository->getUsersAssignedCourses(intval($_SESSION['id']));

if(is_null($result)){
    echo '<p>There are no courses to show!</p>';

}
$course_info = array();

while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
    $course_info['id'][] = $rows['id'];
    $course_info['name'][] = $rows['name'];
}
extract($course_info);
require_once 'footer.php';
?>
<div class="wrapper">
        <table border=1 class="table table-hover table-condensed table-responsive">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($id as $key => $value) {
                echo '<tr>
				<td>'.$name[$key].'</td></tr>';
               // echo "<td>".'<img src=../img/file_edit.png width=40 heigth=40 onclick=edit('.$id[$key].')>'."</td>";
                //echo "<td>".'<img src=../img/delete.png width=40 heigth=40 onclick=askBeforeDelete('.$id[$key].')>'."</td>";
                //echo "<td>".'<img src=../img/assign.png width=40 heigth=40 onclick=assign('.$id[$key].')>'."</td>";
            }
            ?>
            </tbody>

        </table>
</div>