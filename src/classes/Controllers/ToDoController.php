<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 13:28
 */

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Models\ToDoModel;


class ToDoController
{
    private $renderer;
    private $toDoModel;

    public function __construct($renderer, ToDoModel $toDoModel)
    {
        $this->renderer = $renderer;
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['pending'] = $this->toDoModel->getPendingToDos();
        $args['done'] = $this->toDoModel->getDoneToDos();
        return $this->renderer->render($response, 'todo.phtml', $args);
    }

}