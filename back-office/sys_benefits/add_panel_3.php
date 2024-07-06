<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (CheckHaveRowDB::slectFrom("benefit_panel_3")["rows"] === 0) {
        //-> Insert
        $dataSave = [];
        foreach ($_POST as $k => $v) {
            $dataSave[$k] = $v;
        }
        $db = CheckHaveRowDB::query("INSERT INTO `benefit_panel_3`(`name_th_1`, `desc_th_1`, `name_th_2`, `desc_th_2`, `name_th_3`, `desc_th_3`, `name_th_4`, `desc_th_4`, `name_th_5`, `desc_th_5`, `name_th_6`, `desc_th_6`, `name_en_1`, `desc_en_1`, `name_en_2`, `desc_en_2`, `name_en_3`, `desc_en_3`, `name_en_4`, `desc_en_4`, `name_en_5`, `desc_en_5`, `name_en_6`, `desc_en_6`) VALUES (:name_th_1, :desc_th_1, :name_th_2, :desc_th_2, :name_th_3, :desc_th_3, :name_th_4, :desc_th_4, :name_th_5, :desc_th_5, :name_th_6, :desc_th_6, :name_en_1, :desc_en_1, :name_en_2, :desc_en_2, :name_en_3, :desc_en_3, :name_en_4, :desc_en_4, :name_en_5, :desc_en_5, :name_en_6, :desc_en_6)", $dataSave);
    } else {
        //-> Update
        $dataSave = [];
        foreach ($_POST as $k => $v) {
            $dataSave[$k] = $v;
        }
        $db = CheckHaveRowDB::query("UPDATE `benefit_panel_3` SET `name_th_1`=:name_th_1, `desc_th_1`=:desc_th_1, `name_th_2`=:name_th_2, `desc_th_2`=:desc_th_2, `name_th_3`=:name_th_3, `desc_th_3`=:desc_th_3, `name_th_4`=:name_th_4, `desc_th_4`=:desc_th_4, `name_th_5`=:name_th_5, `desc_th_5`=:desc_th_5, `name_th_6`=:name_th_6, `desc_th_6`=:desc_th_6, `name_en_1`=:name_en_1, `desc_en_1`=:desc_en_1, `name_en_2`=:name_en_2, `desc_en_2`=:desc_en_2, `name_en_3`=:name_en_3, `desc_en_3`=:desc_en_3, `name_en_4`=:name_en_4, `desc_en_4`=:desc_en_4, `name_en_5`=:name_en_5, `desc_en_5`=:desc_en_5, `name_en_6`=:name_en_6, `desc_en_6`=:desc_en_6 ", $dataSave);
    }
    header("Location: ../benefits.php#panel3");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
