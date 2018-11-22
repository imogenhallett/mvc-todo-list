<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 16:24
 */

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Validators\ToDoUpdateValidator;


class UpdateController
{
    private $toDoModel;

    /**
     * InsertController constructor.
     * @param $toDoModel
     */
    public function __construct($toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        $data = ToDoUpdateValidator::validateToDoPostData($data);

        if($this->toDoModel->updateToDos($data)){
            return $response->withRedirect('/');
        }
        echo 'it broke';
    }
}