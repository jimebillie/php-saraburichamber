<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["aboutus_detail"])) {
    header("Location: ../aboutus.php#detail2");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `aboutus` SET `detail`=:detail  WHERE `id`=1 ");
        $stmt->execute(["detail" => $_POST["aboutus_detail"]]);
        $_SESSION["resp_pass"] = "Save detail already.";
        header("Location: ../aboutus.php#detail2");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
