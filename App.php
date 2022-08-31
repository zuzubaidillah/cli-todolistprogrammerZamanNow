<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

echo "Aplikasi Todo List" . PHP_EOL;

echo "<pre>";
var_dump($todolist);
die();