<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["messenger_name"]) || !isset($_POST["messenger_link"])) {
    header("Location: ../contact.php#messenger_name");
    exit;
} else {
    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_messenger`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_messenger`(`messenger_name`, `messenger_link`) VALUES (:__messenger_name, :__messenger_link)");
            $stmt->execute(["__messenger_name" => $_POST["messenger_name"], "__messenger_link" => $_POST["messenger_link"]]);
            $_SESSION["resp_pass"] = "Save messenger already.";
            header("Location: ../contact.php#messenger_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_messenger` SET `messenger_name`=:__messenger_name,`messenger_link`=:__messenger_link WHERE `id`=1");
            $stmt->execute(["__messenger_name" => $_POST["messenger_name"], "__messenger_link" => $_POST["messenger_link"]]);
            $_SESSION["resp_pass"] = "Save messenger already.";
            header("Location: ../contact.php#messenger_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
