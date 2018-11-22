<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', 'ToDoController');

$app->post('/todo-insert', 'InsertController');

$app->post('/todo-update', 'UpdateController');