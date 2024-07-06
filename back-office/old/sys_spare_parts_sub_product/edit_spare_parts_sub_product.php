<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Middleware
 */
if (!isset($_POST['id'])) {
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
            header("Location: ../spare_parts_sub_product_edit.php?id=" . $_POST["id"] . "#image");
            exit;
        } else {
            // Valid image

            /**
             * Make new name file.
             */
            $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
            $newName = date("YmdHis") . "-spare-parts-sub-product" . $file_extension;
            /**
             * Move file upload
             */
            try {
                $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub_product` where `id` = :_id");
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
             * update to DB
             */
            try {
                $stmt = $db->conn->prepare("UPDATE `spare_parts_sub_product` SET `number_product`=:__number_product,
                `name_product`=:__name_product,
                `detail_product`=:__detail_product,
                `image`=:__image
                 WHERE `id`=:__id");
                $stmt->execute([
                    "__number_product" => $_POST["number_product"],
                    "__name_product" => $_POST["name_product"],
                    "__detail_product" => $_POST["detail_product"],
                    "__image" => $newName,
                    "__id" => $_POST["id"]
                ]);
            } catch (Exception $e) {
                echo $e;
            }

            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Edit spare_parts-sub-product already ";
            header("Location: ../spare_parts_sub_product_edit.php?id=" . $_POST["id"]);
            exit;
        }
    } else {
        //-> Not have

        /**
         * update to DB
         */
        try {
            $stmt = $db->conn->prepare("UPDATE `spare_parts_sub_product` SET `number_product`=:__number_product,
                `name_product`=:__name_product,
                `detail_product`=:__detail_product
                 WHERE `id`=:__id");
            $stmt->execute([
                "__number_product" => $_POST["number_product"],
                "__name_product" => $_POST["name_product"],
                "__detail_product" => $_POST["detail_product"],
                "__id" => $_POST["id"]
            ]);
        } catch (Exception $e) {
            echo $e;
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Edit spare_parts-sub-product already ";
        header("Location: ../spare_parts_sub_product_edit.php?id=" . $_POST["id"]);
        exit;
    }
}
