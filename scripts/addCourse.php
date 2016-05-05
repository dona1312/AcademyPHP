<?php
include 'header.php';
require_once 'filter.php';

/**
 * Created by PhpStorm.
 * User: B590
 * Date: 23.4.2016 г.
 * Time: 17:46 ч.
 */
?>

<div class="wrapper">
    <div class="input-group">
    <form method="post" action="dbAddCourse.php">
        <h4>Course name:</h4> <input type="text" class="form-control" name="name" placeholder="Insert name"/>
        <h4>Description:</h4>
        <textarea id="area" name="desc"></textarea>
        <input type="submit" value="Insert" class="btn btn-primary"/>
    </form>
    </div>
</div>

