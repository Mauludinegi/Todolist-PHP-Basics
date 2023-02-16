<?php
require_once("../view/viewShowTodolist.php");
require_once("../businesslogic/addTodolist.php");

addTodolist("Giew");
addTodolist("Purnama");
addTodolist("Mauludin");
addTodolist("Programer");
viewShowTodolist();