<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    /**
     * main
     */
    $oldData = CheckHaveRowDB::slectFrom("benefits_good_product", $_GET["id"],);
    $form_cover = __DIR__ . "/../images/benefits/good_product/" . $oldData['data'][0]['_cover']; //-> to
    $form_img = __DIR__ . "/../images/benefits/good_product/" . $oldData['data'][0]['_img']; //-> to
    if (file_exists($form_cover)) {
        unlink($form_cover); //-> unlink
    }
    if (file_exists($form_img)) {
        unlink($form_img); //-> unlink
    }
    $_table = $_GET['table'];
    $db = CheckHaveRowDB::query("DELETE FROM `benefits_good_product` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);


    /**
     * sub
     */
    $oldData2 = CheckHaveRowDB::slectFrom("benefits_good_product_slide", $_GET["id"], 'id_main');
    if ($oldData2['rows'] > 0) {
        foreach ($oldData2['data'] as $k => $v) {
            $form = __DIR__ . "/../images/benefits/good_product/" . $oldData2['data'][$k]['img']; //-> to
            if (file_exists($form)) {
                unlink($form); //-> unlink
            }
            $db = CheckHaveRowDB::query("DELETE FROM `benefits_good_product_slide` WHERE `id_main`=:__id", [
                "__id" => $_GET['id']
            ]);
        }
    }


    header("Location: ../benefits_good_product.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
