<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 16:34
 */

namespace ToDo\Validators;


class ToDoUpdateValidator
{

    public static function validateToDoPostData($data) {
        foreach ($data as $key => $value) {
            if (!is_numeric($key)) {
                unset($data[$key]);
            }
        }
        return $data;
    }
}