<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 16:26
 */

namespace ToDo\Factories;


use ToDo\Controllers\UpdateController;

class UpdateControllerFactory
{
    public function __invoke($c)
    {
        $toDoModel = $c->get('ToDoModel');
        return new UpdateController($toDoModel);
    }


}