<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Layout</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
-->
</head>
<body>
<header>
    <div class="wrapper">
        <img src="../img/logo.png" alt="Logo" id="logo">
        <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <?php
            if (!isset($_SESSION['id'])) {
                echo ' <li><a href="getCourses.php">Courses</a></li>';
            }else{
                echo ' <li><a href="list_courses.php">Courses</a></li>';
            }
            if (isset($_SESSION['isAdmin'])&& $_SESSION['isAdmin']==true){
                echo ' <li><a href="list_users.php">Users</a></li>';
            }
            if (isset($_SESSION['id'])){
                echo '<li><a href="myCourses.php">My courses</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
            }
            else{
                echo ' <li><a href="form.php">Login</a></li>';
            }
            ?>


        </ul>
    </div>
</header>
