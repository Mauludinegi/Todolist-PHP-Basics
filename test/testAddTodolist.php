<?php
require_once("../model/todolist.php");
require_once("../businesslogic/addTodolist.php");

addTodolist("Giw");
addTodolist("Purnama");
addTodolist("Mauludin");

var_dump($todolist);