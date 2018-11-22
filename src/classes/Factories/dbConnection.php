<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 14:24
 */

namespace ToDo\Factories;


class dbConnection
{
    public function __invoke()
    {
        $db = new \PDO('mysql:dbname=todo;host=192.168.20.20','root');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}