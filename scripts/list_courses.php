<?php include 'header.php' ;
require_once '/models/course.php';
require_once '/repositories/CoursesRepository.php';
require_once 'filter.php';
/**
 * Created by PhpStorm.
 * User: dona
 * Date: 16.04.16
 * Time: 15:43
 */
$repository=new CoursesRepository();
$connection = new Connection();

if (!isset($_SESSION['id'])){
//   $result=$connection->returnQueryResult('academy_db',"SELECT * FROM `courses`");
    var_dump($_SESSION);
}


$result=$repository->getCoursesByUserID($_SESSION['id']);

if (is_null($_SESSION['isAdmin'][0])) {
    $admin = 0;
} else {
    $admin = $_SESSION['isAdmin'][0];
}


$course_info = array();

while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
    $course_info['id'][] = $rows['id'];
    $course_info['name'][] = $rows['name'];
}

extract($course_info);

?>
    <div class="wrapper">

        <?php
        if ($admin != 0) {
            echo ' <a href="addCourse.php" class="btn btn-primary">Add new Course</a>';
        }
        ?>

        <table border=1 class="table table-hover table-condensed table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <?php
                if ($admin != 0) {
                    echo '<th>Edit</th>
                    <th>Delete</th>';
                }
                ?>

                <th>Sign in</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($id as $key => $value) {
                echo '<tr>
				<td>' . $name[$key] . '</td>';
                if ($admin != 0) {
                    echo "<td>" . '<img src=../img/file_edit.png width=40 heigth=40 onclick=edit(' . $id[$key] . ')>' . "</td>";
                    echo "<td>" . '<img src=../img/delete.png width=40 heigth=40 onclick=askBeforeDelete(' . $id[$key] . ')>' . "</td>";
                }

                echo "<td>" . '<img src=../img/assign.png width=40 heigth=40 onclick=assign(' . $id[$key] . ')>' . "</td>";
            }
            ?>
            </tbody>

        </table>
    </div>
    <script>
        function askBeforeDelete(id) {
            if (confirm('Are you sure you want to delete this course?')) {
               
                window.location.href = "dbDeleteCourse.php?id=" + id;

            }
        }
        function edit(id) {
            window.location.href = "editCourse.php?id=" + id;
        }
        function assign(id) {
            if (confirm('Are you sure you want to learn this course?')) {
                window.location.href = "assignCourse.php?id=" + id;

            }
        }
    </script>

<?php include 'footer.php' ?>