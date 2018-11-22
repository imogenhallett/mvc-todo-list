<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 13:58
 */

namespace ToDo\Factories;

use ToDo\Models\ToDoModel;

class ToDoModelFactory
{
    public function __invoke($c)
    {
        $db = $c->get('db');
        return new ToDoModel($db);
    }

}