<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


$file = $_FILES["pc"];

/**
 * Check if the file is a valid image
 */

$type_file = explode("/", $file["type"]);
if ($type_file[0] !== "image") {
    // Invalid image
    header("Location: ../benefits.php#panel4");
    exit;
} else {
    // Valid image

    /**
     * Make new name file.
     */
    $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
    $newName = date("YmdHis") . "-img" . $file_extension;
    /**
     * Move file upload
     */
    try {
        move_uploaded_file($file["tmp_name"], "../images/benefits/pn4/" . $newName);
    } catch (Exception $e) {
        echo $e;
    }
    /**
     * Insert to DB
     */
    try {
        $stmt = $db->conn->prepare("INSERT INTO `benefit_panel_4`(`img`) VALUES (:img)");
        $stmt->execute(["img" => $newName]);
    } catch (Exception $e) {
        echo $e;
    }

    /**
     * Seccessful
     */
    header("Location: ../benefits.php#panel4");
    exit;
}
