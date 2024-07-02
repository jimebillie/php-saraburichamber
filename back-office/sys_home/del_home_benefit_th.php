<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


//-> Delete
try {
    $stmt = $db->conn->prepare("DELETE FROM `home_benefit_th` WHERE `id`=:__id ");
    $stmt->execute(["__id" => $_GET['id']]);
    /**
     * Seccessful
     */
    $_SESSION["resp_pass"] = "Delete data already";
    header("Location: ../home_benefits.php#table_th");
    exit;
} catch (Exception $e) {
    echo $e;
}
