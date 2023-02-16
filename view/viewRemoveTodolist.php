<?php
require_once __DIR__ . ("/../helper/input.php");
require_once __DIR__ . ("/../businesslogic/removeTodolist.php");
function viewRemoveTodolist()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus Todo" . PHP_EOL;
    } else {
        $succes = removeTodolist($pilihan);

        if ($succes) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
