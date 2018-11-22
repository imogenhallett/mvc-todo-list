<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 15:45
 */

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class InsertController
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
        if (!empty($data['newToDo'])) {
            if($this->toDoModel->insertToDo($data['newToDo'])){
                return $response->withRedirect('/');
            }
            echo 'it broke';
        } else {
            echo 'please complete the form';
        }

    }
}