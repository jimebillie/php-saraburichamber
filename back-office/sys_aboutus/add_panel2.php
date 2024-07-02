<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (CheckHaveRowDB::slectFrom("aboutus_panel2")["rows"] === 0) {
        //-> Insert
        CheckHaveRowDB::query("INSERT INTO `aboutus_panel2`(`th`, `en`) VALUES (:__th, :__en)", [
            "__th" => $_POST['__th'],
            "__en" => $_POST['__en'],
        ]);
    } else {
        //-> Update
        CheckHaveRowDB::query("UPDATE `aboutus_panel2` SET `th`=:__th,`en`=:__en", [
            "__th" => $_POST['__th'],
            "__en" => $_POST['__en'],
        ]);
    }
    header("Location: ../aboutus.php#panel2");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
