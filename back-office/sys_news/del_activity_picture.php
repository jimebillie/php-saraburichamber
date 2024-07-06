<?php


use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


$oldData = CheckHaveRowDB::slectFrom("activity_picture", $_GET['id']);
//-> Deta old 2
$oldData2 = CheckHaveRowDB::slectFrom("activity_picture_each_id", $_GET['id'], "id_main");

$_unlink = __DIR__ . "/../images/activity/" . $oldData['data'][0]["_img"];
if (file_exists($_unlink)) {
    unlink($_unlink);
}
//-> Unlink 2
foreach ($oldData2['data'] as $k => $v) {
    if (file_exists(__DIR__ . "/../images/activity/" . $oldData2['data'][$k]['img'])) {
        unlink(__DIR__ . "/../images/activity/" . $oldData2['data'][$k]['img']);
    }
}

try {
    $db = CheckHaveRowDB::query("DELETE FROM `activity_picture` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);
    //-> Del database 2
    $db = CheckHaveRowDB::query("DELETE FROM `activity_picture_each_id` WHERE `id_main`=:__id", [
        "__id" => $_GET['id']
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

header("Location: ../news_activity_picture.php");
exit();
