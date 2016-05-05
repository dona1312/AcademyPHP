<?php
require_once 'baseRepository.php';


/**
 * Created by PhpStorm.
 * User: Dona
 * Date: 4.5.2016 г.
 * Time: 15:47
 */
class UsersRepository extends BaseRepository
{
    private $connection;

    function __construct()
    {
        $this->connection = new Connection();
    }

    public function getUsersAssignedCourses($id)
    {
        return $this->connection->returnQueryResult("SELECT * FROM `courses` c JOIN `users_courses` uc
        ON c.id = uc.course_id
        WHERE uc.user_id =" . $id);

    }

    public function AssignToCourse($user, $course)
    {
        $result = $this->connection->returnQueryResult("INSERT INTO `academy_db`.`users_courses` (`user_id`,`course_id`) VALUES ('$user->ID','$course->ID')");

    }

    public function getByUsernameAndPassword($username,$password)
    {
        return  $this->connection->returnQueryResult("SELECT * FROM `users` WHERE username='$username' AND password='$password'");
    }

    public function save($user)
    {
        if ($user->getID() != 0) {
            $this->edit($user);
        } else {
            $this->add($user);
        }
    }

    private function edit($user)
    {
        return $this->connection->returnQueryResult("UPDATE `academy_db`.`users` SET `username` = '$user->username',`password`='$user->password' WHERE `users`.`id` =" . $user->ID);

    }

    private function add($user)
    {
       return  $this->connection->returnQueryResult("INSERT INTO `academy_db`.`users` ( `username`,`password`,`isAdmin`) VALUES ('$user->username','$user->password','$user->isAdmin')");
    }

}