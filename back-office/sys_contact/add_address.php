<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["address"])) {
    header("Location: ../contact.php#address");
    exit;
} else {
    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_address`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_address`(`address`, `address_en`) VALUES (:__address, :__address_en)");
            $stmt->execute(["__address" => $_POST["address"], "__address_en" => $_POST["address_en"]]);
            $_SESSION["resp_pass"] = "Save address already.";
            header("Location: ../contact.php#frm_address");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_address` SET `address`= :__address, `address_en`=:__address_en");
            $stmt->execute(["__address" => $_POST["address"], "__address_en" => $_POST["address_en"]]);
            $_SESSION["resp_pass"] = "Save address already.";
            header("Location: ../contact.php#frm_address");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
