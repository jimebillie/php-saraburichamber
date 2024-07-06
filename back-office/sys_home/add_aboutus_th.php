<?php
session_start();
require_once __DIR__ . "/../database/connect.php";
$db = new connect();
require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;


if (CheckHaveRowDB::slectFrom("home_aboutus_th")['rows'] === 0) {
    /**
     * Insert to DB
     */
    try {
        $stmt = $db->conn->prepare("INSERT INTO `home_aboutus_th`(`detail`) VALUES (:__detail)");
        $stmt->execute(["__detail" => $_POST['detail']]);
    } catch (Exception $e) {
        echo $e;
    }
} else {
    /**
     * Update to DB
     */
    try {
        $stmt = $db->conn->prepare("UPDATE `home_aboutus_th` SET `detail`=:__detail");
        $stmt->execute(["__detail" => $_POST['detail']]);
    } catch (Exception $e) {
        echo $e;
    }
}


/**
 * Seccessful
 */
$_SESSION["resp_pass"] = "Insert data already ";
header("Location: ../home_aboutus.php");
exit;
