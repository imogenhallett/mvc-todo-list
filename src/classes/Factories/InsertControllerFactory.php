<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 15:52
 */

namespace ToDo\Factories;


use ToDo\Controllers\InsertController;

class InsertControllerFactory
{
    public function __invoke($c)
    {
        $toDoModel = $c->get('ToDoModel');
        return new InsertController($toDoModel);
    }

}