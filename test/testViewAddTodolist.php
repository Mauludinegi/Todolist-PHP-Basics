<?php
require_once("../view/viewAddTodolist.php");
require_once("../businesslogic/showTodolist.php");
require_once("../businesslogic/addTodolist.php");

addTodolist("Giew");
addTodolist("Purnama");
addTodolist("Mauludin");

viewAddTodolist();
showTodolist();