<?php

require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

$folderFile = __DIR__ . "/../images/member/";
$oldData = CheckHaveRowDB::slectFrom("form_registration", $_GET['id']);
/**
 * del id_card_file
 */
if (file_exists($folderFile . $oldData['data'][0]['id_card_file'])) {
    unlink($folderFile . $oldData['data'][0]['id_card_file']);
}
/**
 * del number_house_file
 */
if (file_exists($folderFile . $oldData['data'][0]['number_house_file'])) {
    unlink($folderFile . $oldData['data'][0]['number_house_file']);
}
/**
 * del commercial_registration_file
 */
if (file_exists($folderFile . $oldData['data'][0]['commercial_registration_file'])) {
    unlink($folderFile . $oldData['data'][0]['commercial_registration_file']);
}
/**
 * del proof_of_payment_file
 */
if (file_exists($folderFile . $oldData['data'][0]['proof_of_payment_file'])) {
    unlink($folderFile . $oldData['data'][0]['proof_of_payment_file']);
}
/**
 * del logo
 */
if (file_exists($folderFile . $oldData['data'][0]['logo'])) {
    unlink($folderFile . $oldData['data'][0]['logo']);
}
/**
 * del slide_banner 
 */
$exp_slide = explode(',', $oldData['data'][0]['slide_banner']);
foreach ($exp_slide as $k => $v) {
    if (file_exists($folderFile . $v)) {
        unlink($folderFile . $v);
    }
}
/**
 * del main_img
 */
if (file_exists($folderFile . $oldData['data'][0]['main_img'])) {
    unlink($folderFile . $oldData['data'][0]['main_img']);
}

try {
    CheckHaveRowDB::query("DELETE FROM `form_registration` WHERE `id`=:id", [
        'id' => $_GET['id']
    ]);
    header("Location: ../registration.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
