<?php
require_once __DIR__.("/../model/todolist.php");
require_once __DIR__.("/../businesslogic/showTodolist.php");

$todolist[1] = "Belajar PHP Dasar";
$todolist[2] = "Belajar PHP OOP";
$todolist[3] = "Belajar PHP Database";
showTodolist();