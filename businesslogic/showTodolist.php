<?php

//Menampilkan todo di list
function showTodolist() {
    global $todolist;
    echo "TODOLIST" . PHP_EOL;
    foreach ($todolist as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
}