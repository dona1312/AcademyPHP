<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 10:33
 */
require_once 'header.php';

echo '
<div class="wrapper">
    <div id="sidebar-div">
<form action="addUser.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" />

            <label for="password">Password</label>
            <input type="password" name="password" />

            <input type="submit" value="Register" />
        </form>
        </div>
        </div>
        ';

require_once 'footer.php';
