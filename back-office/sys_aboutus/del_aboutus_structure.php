<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    $oldData = CheckHaveRowDB::slectFrom($_GET["table"], $_GET["id"]);

    $form = __DIR__ . "/../images/aboutus/structure/" . $oldData['data'][0]['img']; //-> to
    if (file_exists($form)) {
        unlink($form); //-> unlink
    }
    $_table = $_GET['table'];
    $db = CheckHaveRowDB::query("DELETE FROM `$_table` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);
    header("Location: ../aboutus.php#panel4");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
