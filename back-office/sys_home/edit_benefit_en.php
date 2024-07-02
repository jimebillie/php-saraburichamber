<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    CheckHaveRowDB::query("UPDATE `home_benefit_en` SET `topic`=:__topic,`desc`=:__desc WHERE `id`=:__id", [
        "__topic" => $_POST["topic"],
        "__desc" => $_POST["desc"],
        "__id" => $_POST["id"],
    ]);
    header("Location: ../home_benefits.php#table_en");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
