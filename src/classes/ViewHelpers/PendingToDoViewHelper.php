<?php
/**
 * Created by PhpStorm.
 * User: imogen
 * Date: 22/11/2018
 * Time: 14:31
 */

namespace ToDo\ViewHelpers;


class PendingToDoViewHelper
{
    public static function outputPendingToDos($pendingToDos) {
        $return = '';
        foreach ($pendingToDos as $pendingToDo) {
            $return .= '<div>'.
                $pendingToDo["toDoItem"] .
                '<input type="checkbox" name="'.$pendingToDo["id"].'" value="1"></div>';
        }
        $return .= '<input type="submit" value="Submit"/>';
        return $return;
    }

}