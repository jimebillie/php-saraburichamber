<?php

require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

$oldData = CheckHaveRowDB::slectFrom("form_registration", $_GET['id']);

try {
    CheckHaveRowDB::query("UPDATE `form_registration` SET `display_home`=:display_home WHERE `id`=:id", [
        'display_home' => "show",
        'id' => $_GET['id']
    ]);
    header("Location: ../registration.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
