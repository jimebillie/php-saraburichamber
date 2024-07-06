<?php
session_start();
require_once __DIR__ . "/../database/connect.php";
$db = new connect();
require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;


//-> update 
$oldData = CheckHaveRowDB::slectFrom("home_bestitems")['data'];
$data_save = [
    "__img_1" => $oldData[0]["img_1"],
    "__img_2" => $oldData[0]["img_2"],
    "__img_3" => $oldData[0]["img_3"],
    "__img_4" => $oldData[0]["img_4"],
    "__img_5" => $oldData[0]["img_5"],
    "__img_6" => $oldData[0]["img_6"],
];

/**
 * Unlik file
 */
if (file_exists(__DIR__ . "/../images/home/home_bestitems/" . $data_save["__img_" . $_GET['img']])) {
    unlink(__DIR__ . "/../images/home/home_bestitems/" . $data_save["__img_" . $_GET['img']]);
}
try {
    $data_save["__img_" . $_GET['img']] = "";
    $stmt = $db->conn->prepare("UPDATE `home_bestitems` SET `img_1`=:__img_1,`img_2`=:__img_2,`img_3`=:__img_3,`img_4`=:__img_4,`img_5`=:__img_5,`img_6`=:__img_6");
    $stmt->execute($data_save);
    header("Location: ../home_bestitems.php");
    exit();
} catch (Exception $e) {
    echo $e;
    exit();
}
