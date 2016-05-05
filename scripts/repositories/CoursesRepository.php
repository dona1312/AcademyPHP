<?php
require_once 'baseRepository.php';
/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 4.5.2016 г.
 * Time: 13:54
 */



class CoursesRepository extends BaseRepository
{
    private $connection;

    function __construct()
    {
        $this->connection = new Connection();
    }

    public function save($course)
    {
        if ($course->getID() != 0) {
           $this->edit($course);
        } else {
            $this->add($course);
        }
    }

    private function edit($course)
    {
        $result = $this->connection->returnQueryResult("UPDATE `academy_db`.`courses` SET `name` = '$course->name',`description`='$course->description' WHERE `courses`.`id` =" . $course->ID);
        die();
    }

    private function add($course)
    {
        $result = $this->connection->returnQueryResult("INSERT INTO `academy_db`.`courses` ( `name`,`description`) VALUES ('$course->name','$course->description')");
        die();
    }

    public function getCoursesByUserID($id)
    {
        $inner_query = "SELECT name FROM courses c JOIN users_courses uc ON c.id=uc.course_id WHERE uc.user_id=" . $_SESSION['id'];

        $result = $this->connection->returnQueryResult("SELECT * FROM courses WHERE name NOT IN(" . $inner_query . ")");
        return $result;

    }



}