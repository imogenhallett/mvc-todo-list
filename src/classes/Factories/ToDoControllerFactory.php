<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 13:25
 */

namespace ToDo\Factories;


use ToDo\Controllers\ToDoController;

class ToDoControllerFactory
{
    public function __invoke($c)
    {
        $renderer = $c->get('renderer');
        $toDoModel = $c->get('ToDoModel');
        return new ToDoController($renderer, $toDoModel);
    }

}