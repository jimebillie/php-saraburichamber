<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Middleware
 */
if (!isset($_POST["service_name"]) || !isset($_POST["service_detail"]) || !isset($_POST['id'])) {
    header("Location: ../service.php");
    exit;
} else {
    /**
     * Check if have upload image ?
     */
    if (isset($_FILES["service_image"]) && $_FILES["service_image"]["name"] !== "") {
        //-> Have
        $file = $_FILES["service_image"];

        /**
         * Check if the file is a valid image
         */

        $type_file = explode("/", $file["type"]);
        if ($type_file[0] !== "image") {
            // Invalid image
            $_SESSION["resp_warn"] = "Your file is not an image, Please new upload again.";
            $_SESSION["data_back"] = ["name" => $_POST["service_name"], "detail" => $_POST["service_detail"]];
            header("Location: ../service_edit.php?id=" . $_POST["id"] . "#service_image");
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
                $stmt = $db->conn->prepare("SELECT service_image FROM `service` where `id` = :_id");
                $stmt->execute(["_id" => $_POST["id"]]);
                $result = $stmt->fetch();
                if (file_exists("../images/service/" . $result['service_image'])) {
                    unlink("../images/service/" . $result['service_image']);
                }
                move_uploaded_file($file["tmp_name"], "../images/service/" . $newName);
            } catch (Exception $e) {
                echo $e;
            }
            /**
             * Insert to DB
             */
            try {
                $stmt = $db->conn->prepare("UPDATE `service` SET `service_name`=:__service_name,`service_detail`=:__service_detail,`service_image`=:__service_image WHERE `id`=:__id");
                $stmt->execute(["__service_name" => $_POST["service_name"], "__service_detail" => $_POST["service_detail"], "__service_image" => $newName, "__id" => $_POST["id"]]);
            } catch (Exception $e) {
                echo $e;
            }

            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Edit service already ";
            header("Location: ../service_edit.php?id=" . $_POST["id"]);
            exit;
        }
    } else {
        //-> Not have

        /**
         * Insert to DB
         */
        try {
            $stmt2 = $db->conn->prepare("UPDATE `service` SET `service_name`=:__service_name,`service_detail`=:__service_detail WHERE `id`=:__id ");
            $stmt2->execute(["__service_name" => $_POST["service_name"], "__service_detail" => $_POST["service_detail"], "__id" => $_POST["id"]]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Edit service already ";
        header("Location: ../service_edit.php?id=" . $_POST["id"]);
        exit;
    }
}
