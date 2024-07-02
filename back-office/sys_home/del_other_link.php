<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    $oldData = CheckHaveRowDB::slectFrom("home_other_link", $_GET["id"]);

    $form = __DIR__ . "/../images/home/home_link/" . $oldData['data'][0]['img']; //-> to
    if (file_exists($form)) {
        unlink($form); //-> unlink
    }
    $db = CheckHaveRowDB::query("DELETE FROM `home_other_link` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);
    header("Location: ../home_other_link.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
