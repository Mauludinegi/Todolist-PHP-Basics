<?php
require_once __DIR__ . ("/../helper/input.php");
require_once __DIR__ . ("/../model/todolist.php");
require_once __DIR__ . ("/../businesslogic/addTodolist.php");
function viewAddTodolist()
{
    echo "Menambah Todo" . PHP_EOL;
    $todo = input("todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah Todo" . PHP_EOL;
        //batal
    } else {
        addTodolist($todo);
    }
}
