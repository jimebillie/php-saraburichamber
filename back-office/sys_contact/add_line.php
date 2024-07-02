<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["line_name"]) || !isset($_POST["line_link"])) {
    header("Location: ../contact.php#line_name");
    exit;
} else {
    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_line`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_line`(`line_name`, `line_link`) VALUES (:__line_name, :__line_link)");
            $stmt->execute(["__line_name" => $_POST["line_name"], "__line_link" => $_POST["line_link"]]);
            $_SESSION["resp_pass"] = "Save line already.";
            header("Location: ../contact.php#line_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_line` SET `line_name`=:__line_name,`line_link`=:__line_link WHERE `id`=1");
            $stmt->execute(["__line_name" => $_POST["line_name"], "__line_link" => $_POST["line_link"]]);
            $_SESSION["resp_pass"] = "Save line already.";
            header("Location: ../contact.php#line_name");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
