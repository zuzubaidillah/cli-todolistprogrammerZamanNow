<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

// kita tambahkan sementara datanya 1
$todolist[1] = "Belajar PHP Dasar";
$todolist[2] = "Belajar PHP Database";
$todolist[3] = "Belajar PHP Web";
$todolist[4] = "Belajar Golang";

//  2
// $todolist = [
//     1 => "Php Dasar",
//     2 => "PHP Web",
//     3 => "PHP Database"
// ];

// kita tampilkan
showTodoList();