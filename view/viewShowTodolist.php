<?php
require_once __DIR__ . ("/../helper/input.php");
require_once __DIR__ . ("/../model/todolist.php");
require_once __DIR__ . ("/../view/viewAddTodolist.php");
require_once __DIR__ . ("/../view/viewRemoveTodolist.php");
require_once __DIR__ . ("/../businesslogic/showTodolist.php");
function viewShowTodolist()
{
    while (true) {
        showTodolist();
        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapust Todo" . PHP_EOL;
        echo "X. Keluar" . PHP_EOL;

        $pilihan = input("pilih");
        if ($pilihan == "1") {
            viewAddTodolist();
        } else if ($pilihan == "2") {
            viewRemoveTodolist();
        } else if ($pilihan == "x") {
            //keluar
            break;
        } else {
            echo "pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi" . PHP_EOL;
}
