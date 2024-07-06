<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


//-> New insert
try {
    $stmt = $db->conn->prepare("INSERT INTO `home_benefit_th`(`topic`, `desc`) VALUES (:__topic, :__desc)");
    $stmt->execute(["__topic" => $_POST['topic'], "__desc" => $_POST["desc"]]);
    /**
     * Seccessful
     */
    $_SESSION["resp_pass"] = "Insert data already";
    header("Location: ../home_benefits.php#table_th");
    exit;
} catch (Exception $e) {
    echo $e;
}
