<?php
include 'header.php';
include '/repositories/UsersRepository.php';
require_once 'filter.php';
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 10:48
 */


$repo=new UsersRepository();

$result = $repo->getAll('users');
$user_info = array();

while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
    $user_info['id'][] = $rows['id'];
    $user_info['username'][] = $rows['username'];
    $user_info['password'][] = $rows['password'];
    $user_info['isAdmin'][] = $rows['isAdmin'];
}

extract($user_info);
?>
    <div class="wrapper">
        <a class="btn btn-primary" href="register.php">Add new user</a>
        <table border=1 class="table table-hover table-condensed table-responsive">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($id as $key => $value) {
                echo '<tr>
				<td>'.$username[$key].'</td>
                <td>'.$password[$key].'</td>';
                echo "<td>".'<img src=../img/file_edit.png width=40 heigth=40 onclick=edit('.$id[$key].')>'."</td>";
                echo "<td>".'<img src=../img/delete.png width=40 heigth=40 onclick=askBeforeDelete('.$id[$key].')>'."</td>";

            }
            ?>


        </table>
    </div>
    <script>
        function askBeforeDelete(id){
            if(confirm('Are you sure you want to delete this user?')){
               
                window.location.href="dbDeleteUser.php?id="+id;

            }else{

            }
        }
        function edit(id){
            window.location.href="editUser.php?id="+id;
        }
    </script>

<?php include 'footer.php' ?>