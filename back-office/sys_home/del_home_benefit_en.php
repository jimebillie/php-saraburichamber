<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


//-> Delete
try {
    $stmt = $db->conn->prepare("DELETE FROM `home_benefit_en` WHERE `id`=:__id ");
    $stmt->execute(["__id" => $_GET['id']]);
    /**
     * Seccessful
     */
    $_SESSION["resp_pass"] = "Delete data already";
    header("Location: ../home_benefits.php#table_en");
    exit;
} catch (Exception $e) {
    echo $e;
}
