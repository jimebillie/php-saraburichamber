<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["map"])) {
    header("Location: ../contact.php#map");
    exit;
} else {

    $count_db = 0;
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `contact_map`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        try {
            $stmt = $db->conn->prepare("INSERT INTO `contact_map`(`map`) VALUES (:__map)");
            $stmt->execute(["__map" => $_POST["map"]]);
            $_SESSION["resp_pass"] = "Save map already.";
            header("Location: ../contact.php#map");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $stmt = $db->conn->prepare("UPDATE `contact_map` SET `map`= :__map WHERE `id`=1 ");
            $stmt->execute(["__map" => $_POST["map"]]);
            $_SESSION["resp_pass"] = "Save map already.";
            header("Location: ../contact.php#map");
            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
