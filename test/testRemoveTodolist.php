<?php
require_once("../model/todolist.php");
require_once("businesslogic/removeTodolist.php");
require_once("../businesslogic/addTodolist.php");
require_once("../businesslogic/showTodolist.php");

addTodolist("Giew");
addTodolist("Mauludin");
addTodolist("Purnama");

showTodolist();

removeTodolist(1);
showTodolist();