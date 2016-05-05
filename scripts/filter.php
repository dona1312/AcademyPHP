<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 3.5.2016 г.
 * Time: 9:32
 */
if (!isset($_SESSION['id'])) {
    header('Location: error.php');

//    echo 'fuck';
} else {
    if (!isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'][0] == 0) {
        // var_dump($_SESSION['isAdmin'][0]);
        header('Location: error.php');
    }
}

