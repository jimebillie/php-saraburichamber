<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_POST["aboutus_tell_something"])) {
    header("Location: ../aboutus.php");
    exit;
} else {
    try {
        $stmt = $db->conn->prepare("UPDATE `aboutus_tell_something` SET `msg`=:msg  WHERE `id`=1 ");
        $stmt->execute(["msg" => $_POST["aboutus_tell_something"]]);
        $_SESSION["resp_pass"] = "Save message aboutus already.";
        header("Location: ../aboutus.php");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
