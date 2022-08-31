<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("PHP Dasar");
addTodoList("Siswa Belajar PHP");
addTodoList("Siswa Belajar Golang");
addTodoList("Siswa Belajar Python");

showTodoList();