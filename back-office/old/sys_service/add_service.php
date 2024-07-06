<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Middleware
 */
if (!isset($_POST["service_name"]) || !isset($_FILES["service_image"]) || !isset($_POST["service_detail"])) {
    header("Location: ../service.php");
    exit;
} else {
    $file = $_FILES["service_image"];

    /**
     * Check if the file is a valid image
     */

    $type_file = explode("/", $file["type"]);
    if ($type_file[0] !== "image") {
        // Invalid image
        $_SESSION["resp_warn"] = "Your file is not an image, Please new upload again.";
        $_SESSION["data_back"] = ["name" => $_POST["service_name"], "detail" => $_POST["service_detail"]];
        header("Location: ../service.php#service_image");
        exit;
    } else {
        // Valid image

        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $newName = date("YmdHis") . "-service" . $file_extension;
        /**
         * Move file upload
         */
        try {
            move_uploaded_file($file["tmp_name"], "../images/service/" . $newName);
        } catch (Exception $e) {
            echo $e;
        }
        /**
         * Insert to DB
         */
        try {
            $stmt = $db->conn->prepare("INSERT INTO `service`(`service_name`, `service_detail`, `service_image`) VALUES (:__service_name,:__service_detail,:__service_image)");
            $stmt->execute(["__service_name" => $_POST["service_name"], "__service_detail" => $_POST["service_detail"], "__service_image" => $newName]);
        } catch (Exception $e) {
            echo $e;
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Insert service already ";
        header("Location: ../service.php#service_all");
        exit;
    }
}
