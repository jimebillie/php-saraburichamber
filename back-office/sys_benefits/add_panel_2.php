<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (CheckHaveRowDB::slectFrom("benefit_panel_2")["rows"] === 0) {
        //-> Insert
        $dataSave = [];
        foreach ($_POST as $k => $v) {
            $dataSave["__" . $k] = $v;
        }
        $db = CheckHaveRowDB::query("INSERT INTO `benefit_panel_2`(`name_1_th`, `name_1_en`, `desc_1_th`, `desc_1_en`, `name_2_th`, `name_2_en`, `desc_2_th`, `desc_2_en`) VALUES (:__name_1_th, :__name_1_en, :__desc_1_th, :__desc_1_en, :__name_2_th, :__name_2_en, :__desc_2_th, :__desc_2_en)", $dataSave);
    } else {
        //-> Update
        $dataSave = [];
        foreach ($_POST as $k => $v) {
            $dataSave["__" . $k] = $v;
        }
        $db = CheckHaveRowDB::query("UPDATE `benefit_panel_2` SET `name_1_th`=:__name_1_th, `name_1_en`=:__name_1_en, `desc_1_th`=:__desc_1_th, `desc_1_en`=:__desc_1_en, `name_2_th`=:__name_2_th, `name_2_en`=:__name_2_en, `desc_2_th`=:__desc_2_th, `desc_2_en`=:__desc_2_en ", $dataSave);
    }
    header("Location: ../benefits.php#panel2");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
