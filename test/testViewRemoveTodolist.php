<?php
require_once("../model/todolist.php");
require_once("../view/viewRemoveTodolist.php");
require_once("../businesslogic/addTodolist.php");
require_once("../businesslogic/showTodolist.php");

addTodolist("Giw");
addTodolist("Gie");
addTodolist("Purnama");
addTodolist("Mauludin");
addTodolist("Programmer");

showTodolist();
viewRemoveTodolist();
showTodolist();