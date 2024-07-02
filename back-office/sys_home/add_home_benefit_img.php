<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


$file = $_FILES["home_benefit_img"];

/**
 * Check if the file is a valid image
 */

$type_file = explode("/", $file["type"]);
if ($type_file[0] !== "image") {
    // Invalid image
    $_SESSION["resp_warn"] = "Some file is not an image, Please new upload again.";
    header("Location: ../home_benefits.php");
    exit;
} else {

    $count_db = 0;
    $dataOld = "";
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `home_benefit_img`");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $row) {
            $dataOld = $row["img"];
            $count_db += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($count_db === 0) {
        // Valid image

        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $newName = date("YmdHis") . "-home_benefits" . $file_extension;
        /**
         * Move file upload
         */
        try {
            move_uploaded_file($file["tmp_name"], "../images/home/home_benefits/" . $newName);
        } catch (Exception $e) {
            echo $e;
        }
        /**
         * Insert to DB
         */
        try {
            $stmt = $db->conn->prepare("INSERT INTO `home_benefit_img`(`img`) VALUES (:img)");
            $stmt->execute(["img" => $newName]);
            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Insert image already ";
            header("Location: ../home_benefits.php");
            exit;
        } catch (Exception $e) {
            echo $e;
        }
    } else {
        /**
         * Unlik file
         */
        if (file_exists("../images/home/home_benefits/" . $dataOld)) {
            unlink("../images/home/home_benefits/" . $dataOld);
        }
        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $newName = date("YmdHis") . "-home_benefits" . $file_extension;
        /**
         * Move file upload
         */
        try {
            move_uploaded_file($file["tmp_name"], "../images/home/home_benefits/" . $newName);
        } catch (Exception $e) {
            echo $e;
        }
        /**
         * Update to DB
         */
        try {
            $stmt = $db->conn->prepare("UPDATE `home_benefit_img` SET `img`= :__img");
            $stmt->execute(["__img" => $newName]);
            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Insert image already ";
            header("Location: ../home_benefits.php");
            exit;
        } catch (Exception $e) {
            echo $e;
        }
    }
}
