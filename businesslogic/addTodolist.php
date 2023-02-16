<?php
//menambah todo ke list
function addTodolist(string $todo) {
    global $todolist;
    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;   
}
