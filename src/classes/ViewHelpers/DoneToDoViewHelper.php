<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 15:02
 */

namespace ToDo\ViewHelpers;


class DoneToDoViewHelper
{
    public static function outputDoneToDos($doneToDos) {
        $return = '';
        foreach ($doneToDos as $doneToDo) {
            $return .= '<div>'. $doneToDo["toDoItem"] . '</div>';
        }
        return $return;
    }

}