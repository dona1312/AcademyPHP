<?php

include "header.php";


if (isset($_SESSION['id'])) {
    header("Location: list_courses.php");
} else {
    echo '
<div class="wrapper">
    <div id="form-div">
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <input class="button" type="submit" value="Log in" />
        </form>
        <a class="button" href="register.php" class="btn btn-primary">Register now</a>
      
    </div>
    
</div> ';
}

/**
 * Created by PhpStorm.
 * User: dona
 * Date: 16.04.16
 * Time: 12:31
 */

?>
<?php include "footer.php" ?>
