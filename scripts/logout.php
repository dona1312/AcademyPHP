<?php
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 27.4.2016 г.
 * Time: 10:14
 */
session_start();
session_destroy();

header("Location: form.php");