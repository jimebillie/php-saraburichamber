<?php

require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;



try {
    CheckHaveRowDB::query("INSERT INTO `register_show_list`(`id_main`) VALUES (:__id_main)", [
        '__id_main' => $_GET['id']
    ]);
    header("Location: ../registration.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
