<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Middleware
 */
if (!isset($_POST["name"]) || !isset($_POST['id'])) {
    header("Location: ../spare_parts.php"); //-> Change
    exit;
} else {
    /**
     * Check if have upload image ?
     */
    if (isset($_FILES["image"]) && $_FILES["image"]["name"] !== "") {
        //-> Have
        $file = $_FILES["image"];

        /**
         * Check if the file is a valid image
         */

        $type_file = explode("/", $file["type"]);
        if ($type_file[0] !== "image") {
            // Invalid image
            $_SESSION["resp_warn"] = "Your file is not an image, Please new upload again.";
            header("Location: ../spare_parts_edit.php?id=" . $_POST["id"] . "#image");
            exit;
        } else {
            // Valid image

            /**
             * Make new name file.
             */
            $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
            $newName = date("YmdHis") . "-spare-parts" . $file_extension;
            /**
             * Move file upload
             */
            try {
                $stmt = $db->conn->prepare("SELECT * FROM `spare_parts` where `id` = :_id");
                $stmt->execute(["_id" => $_POST["id"]]);
                $result = $stmt->fetch();
                if (file_exists("../images/spare_parts/" . $result['image'])) {
                    unlink("../images/spare_parts/" . $result['image']);
                }
                move_uploaded_file($file["tmp_name"], "../images/spare_parts/" . $newName);
            } catch (Exception $e) {
                echo $e;
            }
            /**
             * Insert to DB
             */
            try {
                $stmt = $db->conn->prepare("UPDATE `spare_parts` SET `name`=:__name,`image`=:__image, `link_for_sale`=:__link_for_sale WHERE `id`=:__id");
                $stmt->execute(["__name" => $_POST["name"], "__image" => $newName, "__link_for_sale" => $_POST["link_for_sale"], "__id" => $_POST["id"]]);
            } catch (Exception $e) {
                echo $e;
            }

            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Edit spare_parts already ";
            header("Location: ../spare_parts_edit.php?id=" . $_POST["id"]);
            exit;
        }
    } else {
        //-> Not have

        /**
         * Insert to DB
         */
        try {
            $stmt = $db->conn->prepare("UPDATE `spare_parts` SET `name`=:__name, `link_for_sale`=:__link_for_sale WHERE `id`=:__id");
            $stmt->execute(["__name" => $_POST["name"], "__link_for_sale" => $_POST["link_for_sale"], "__id" => $_POST["id"]]);
        } catch (Exception $e) {
            echo $e;
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Edit spare_parts already ";
        header("Location: ../spare_parts_edit.php?id=" . $_POST["id"]);
        exit;
    }
}
