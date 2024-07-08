<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (CheckHaveRowDB::slectFrom("benefit_panel_1")["rows"] === 0) {
        //-> Insert
        if (isset($_FILES["__img"]) && $_FILES["__img"]["name"] !== "") {
            /**
             * Check type file
             */
            if (explode("/", $_FILES['__img']['type'])[0] !== "image") {
                throw new Exception("โปรดใช้ไฟล์รูปภาพเท่านั้น");
            }

            $newName = uniqid().uniqid() . "." . explode(".", $_FILES['__img']['name'])[count(explode(".", $_FILES['__img']['name'])) - 1]; //-> newname
            $from = $_FILES['__img']['tmp_name']; //-> from
            $to = __DIR__ . "/../images/benefits/pn1/" . $newName; //-> to
            move_uploaded_file($from, $to); //-> move
            CheckHaveRowDB::query("INSERT INTO `benefit_panel_1`(`img`,`th`, `en`) VALUES (:__img,:__th, :__en)", [
                "__img" => $newName,
                "__th" => $_POST['__th'],
                "__en" => $_POST['__en'],
            ]);
        } else {
            CheckHaveRowDB::query("INSERT INTO `benefit_panel_1`(`img`,`th`, `en`) VALUES (:__img,:__th, :__en)", [
                "__img" => "",
                "__th" => $_POST['__th'],
                "__en" => $_POST['__en'],
            ]);
        }
    } else {
        //-> Update
        $oldData = CheckHaveRowDB::slectFrom("benefit_panel_1");
        $formDel = __DIR__ . "/../images/benefits/pn1/" . $oldData['data'][0]['img']; //-> to
        if (isset($_FILES["__img"]) && $_FILES["__img"]["name"] !== "") {
            /**
             * Check type file
             */
            if (explode("/", $_FILES['__img']['type'])[0] !== "image") {
                throw new Exception("โปรดใช้ไฟล์รูปภาพเท่านั้น");
            }
            if (file_exists($formDel)) {
                unlink($formDel); //-> unlink
            }
            $newName = uniqid().uniqid() . "." . explode(".", $_FILES['__img']['name'])[count(explode(".", $_FILES['__img']['name'])) - 1]; //-> newname
            $from = $_FILES['__img']['tmp_name']; //-> from
            $to = __DIR__ . "/../images/benefits/pn1/" . $newName; //-> to
            move_uploaded_file($from, $to); //-> move
            CheckHaveRowDB::query("UPDATE `benefit_panel_1` SET `img`=:__img, `th`=:__th,`en`=:__en", [
                "__img" => $newName,
                "__th" => $_POST['__th'],
                "__en" => $_POST['__en'],
            ]);
        } else {
            CheckHaveRowDB::query("UPDATE `benefit_panel_1` SET `th`=:__th,`en`=:__en", [
                "__th" => $_POST['__th'],
                "__en" => $_POST['__en'],
            ]);
        }
    }
    header("Location: ../benefits.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
