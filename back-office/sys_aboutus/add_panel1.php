<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (CheckHaveRowDB::slectFrom("aboutus_panel1")["rows"] === 0) {
        //-> Insert
        CheckHaveRowDB::query("INSERT INTO `aboutus_panel1`(`th`, `en`) VALUES (:__th, :__en)", [
            "__th" => $_POST['__th'],
            "__en" => $_POST['__en'],
        ]);
    } else {
        //-> Update
        CheckHaveRowDB::query("UPDATE `aboutus_panel1` SET `th`=:__th,`en`=:__en", [
            "__th" => $_POST['__th'],
            "__en" => $_POST['__en'],
        ]);
    }
    header("Location: ../aboutus.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
