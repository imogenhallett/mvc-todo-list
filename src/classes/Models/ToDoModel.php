<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 13:56
 */

namespace ToDo\Models;


class ToDoModel
{
    private $db;

    /**
     * UserModel constructor.
     * @param $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getPendingToDos() {
        $query = $this->db->prepare('Select `id`, `toDoItem` FROM toDoItems WHERE `status` = 0 ;');
        $query->execute();
        return $query->fetchAll();
    }

    public function getDoneToDos() {
        $query = $this->db->prepare('Select `toDoItem` FROM toDoItems WHERE `status` = 1 ;');
        $query->execute();
        return $query->fetchAll();
    }

    public function insertToDo($todo) {
        $query = $this->db->prepare('INSERT INTO `toDoItems` (`toDoItem`) VALUES (?)');
        return $query->execute([$todo]);
    }

    public function updateToDos($todos) {
        foreach ($todos as $key => $value) {
            $query = $this->db->prepare('UPDATE `toDoItems` SET `status`=1 WHERE `id` = ?');
            return $query->execute([$key]);
        }
    }


}