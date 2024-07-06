<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["email"])) {
    header("Location: ../contact.php");
    exit;
} else {

    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_email`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_email`(`email`) VALUE (:__email)");
            $stmt->execute(["__email" => $_POST["email"]]);
            $_SESSION["resp_pass"] = "Save email already.";
            header("Location: ../contact.php#email");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_email` SET `email`= :__email WHERE `id`=1 ");
            $stmt->execute(["__email" => $_POST["email"]]);
            $_SESSION["resp_pass"] = "Save email already.";
            header("Location: ../contact.php#email");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
