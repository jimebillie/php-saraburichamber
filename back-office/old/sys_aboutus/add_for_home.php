<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["aboutus_home_detail"])) {
    header("Location: ../aboutus.php#detail1");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `aboutus_home` SET `detail`=:detail  WHERE `id`=1 ");
        $stmt->execute(["detail" => $_POST["aboutus_home_detail"]]);
        $_SESSION["resp_pass"] = "Save detail for home page already.";
        header("Location: ../aboutus.php#detail1");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
