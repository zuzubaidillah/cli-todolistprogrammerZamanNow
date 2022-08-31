<?php

/*
* Menampilkan data
* */
function addTodoList(string $todo)
{
    global $todolist;

    $number = count($todolist) + 1;

    $todolist[$number] = $todo;
}