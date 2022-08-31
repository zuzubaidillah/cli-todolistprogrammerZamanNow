<?php
// require_once "Model/TodoList.php";
/*
* Menampilkan data
* */
function showTodoList()
{
    // 1
    global $todolist;

    // 2 
    // $GLOBALS['todolist'];

    echo "TodoList " . PHP_EOL;

    foreach ($GLOBALS['todolist'] as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}