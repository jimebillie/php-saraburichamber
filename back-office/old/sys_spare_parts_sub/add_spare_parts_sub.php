<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


/**
 * Middleware
 */
if (!isset($_POST["name"]) || !isset($_POST["id_main"]) || !isset($_FILES["image"])) {
    header("Location: ../spare_parts.php");
    exit;
} else {
    // echo "<pre>";
    // var_dump($_POST["name"]);
    // var_dump($_FILES["image"]);
    // echo "</pre>";


    /**
     * Var check error.
     */
    $chk_err = 0;

    /**
     * Check if valid image.
     */
    $file = $_FILES["image"];
    $file_type = explode("/", $file["type"])[0];

    if ($file_type === "image") {
        //-> is valid the image.

        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $newName = date("YmdHis") . "-spare-parts-sub" . $file_extension;

        /**
         * Upload file to storage.
         */
        if (move_uploaded_file($file["tmp_name"], "../images/spare_parts/" . $newName)) {
            /**
             * Insert data to DB.
             */
            try {
                $stmt = $db->conn->prepare("INSERT INTO `spare_parts_sub`(`id_main`,`name`, `image`) VALUES (:__id_main,:__name,:__image)");
                $stmt->execute(["__id_main" => $_POST["id_main"], "__name" => $_POST["name"], "__image" => $newName]);
            } catch (Exception $e) {
                echo $e->getMessage();
                //-> Set error;
                $chk_err = 2;
            }
        } else {
            //-> Set error;
            $chk_err = 1;
        }

        /**
         * Manage error
         */
        if ($chk_err > 0) {
            //-> Error
            $_SESSION["resp_warn"] = "Can't insert spare parts-sub. #" . $chk_err;
            header("Location: ../spare_parts_edit.php?id=".$_POST["id_main"]."&p=m");
            exit;
        } else {
            //-> Successful
            $_SESSION["resp_warn"] = "Insert spare parts-sub already.";
            header("Location: ../spare_parts_edit.php?id=".$_POST["id_main"]."&p=m#brand_all");
            exit;
        }
    } else {
        //-> Invalid the image.
        $_SESSION["resp_warn"] = "Your file upload invalid image.";
        header("Location: ../spare_parts_edit.php?id=".$_POST["id_main"]."&p=m#image_brand_spare_parts");
        exit;
    }
}
