<?php
require_once __DIR__ . ("/model/todolist.php");
require_once __DIR__ . ("/businesslogic/addTodolist.php");
require_once __DIR__ . ("/businesslogic/removeTodolist.php");
require_once __DIR__ . ("/businesslogic/showTodolist.php");
require_once __DIR__ . ("/view/viewAddTodolist.php");
require_once __DIR__ . ("/view/viewRemoveTodolist.php");
require_once __DIR__ . ("/view/viewShowTodolist.php");
require_once __DIR__ . ("/helper/input.php");
echo "Aplikasi Todolist" . PHP_EOL;
viewShowTodolist();
