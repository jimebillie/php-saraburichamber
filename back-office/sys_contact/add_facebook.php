<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["facebook_name"]) || !isset($_POST["facebook_link"])) {
    header("Location: ../contact.php#facebook_name");
    exit;
} else {
    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_facebook`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_facebook`(`facebook_name`, `facebook_link`) VALUES (:__facebook_name, :__facebook_link)");
            $stmt->execute(["__facebook_name" => $_POST["facebook_name"], "__facebook_link" => $_POST["facebook_link"]]);
            $_SESSION["resp_pass"] = "Save facebook already.";
            header("Location: ../contact.php#facebook_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_facebook` SET `facebook_name`=:__facebook_name,`facebook_link`=:__facebook_link WHERE `id`=1");
            $stmt->execute(["__facebook_name" => $_POST["facebook_name"], "__facebook_link" => $_POST["facebook_link"]]);
            $_SESSION["resp_pass"] = "Save facebook already.";
            header("Location: ../contact.php#facebook_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
