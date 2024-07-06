<?php

require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

$old = CheckHaveRowDB::slectFrom("form_registration", $_GET['id']);
$exp = explode(",", $old['data'][0]['slide_banner']);
if (file_exists(__DIR__ . "/../images/member/" . $exp[$_GET['id_img']])) {
    unlink(__DIR__ . "/../images/member/" . $exp[$_GET['id_img']]);
}
unset($exp[$_GET['id_img']]);

try {
    CheckHaveRowDB::query("UPDATE `form_registration` SET `slide_banner`=:slide_banner WHERE `id`=:id", [
        "slide_banner" => implode(',', $exp),
        "id" => $_GET['id']
    ]);
    echo json_encode(["msg" => "pass"]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
