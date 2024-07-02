<?php


use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


$oldData = CheckHaveRowDB::slectFrom("news", $_GET['id']);
$oldData2 = CheckHaveRowDB::slectFrom("news_pic", $_GET['id'], "id_main");

$_unlink = __DIR__ . "/../images/news/" . $oldData['data'][0]["_img"];
if (file_exists($_unlink)) {
    unlink($_unlink);
}
foreach ($oldData2['data'] as $k => $v) {
    if (file_exists(__DIR__ . "/../images/news/" . $oldData2['data'][$k]['img'])) {
        unlink(__DIR__ . "/../images/news/" . $oldData2['data'][$k]['img']);
    }
}

try {
    $db = CheckHaveRowDB::query("DELETE FROM `news` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);
    $db = CheckHaveRowDB::query("DELETE FROM `news_pic` WHERE `id_main`=:__id", [
        "__id" => $_GET['id']
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

header("Location: ../news.php");
exit();
