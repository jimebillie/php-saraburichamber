<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


/**
 * Middleware
 */
if (!isset($_POST["number_product"]) || !isset($_POST["name_product"]) || !isset($_POST["detail_product"]) || !isset($_POST["id_sub"]) || !isset($_POST["id_main"]) || !isset($_FILES["image"])) {
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
        $newName = date("YmdHis") . "-spare-parts-sub-product" . $file_extension;

        /**
         * Upload file to storage.
         */
        if (move_uploaded_file($file["tmp_name"], "../images/spare_parts/" . $newName)) {
            /**
             * Insert data to DB.
             */
            try {
                $stmt = $db->conn->prepare("INSERT INTO `spare_parts_sub_product`(`id_main`, `id_sub`, `number_product`,`name_product`, `detail_product`, `image`) VALUES (:__id_main,:__id_sub,:__number_product,:__name_product,:__detail_product,:__image)");
                $stmt->execute([
                    "__id_main" => $_POST["id_main"],
                    "__id_sub" => $_POST["id_sub"],
                    "__number_product" => $_POST["number_product"],
                    "__name_product" => $_POST["name_product"],
                    "__detail_product" => $_POST["detail_product"],
                    "__image" => $newName
                ]);
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
            $_SESSION["resp_warn"] = "Can't insert spare parts-sub-product. #" . $chk_err;
            header("Location: ../spare_parts_sub_edit.php?id_sub=" . $_POST["id_sub"] . "&p=m#add_brand");
            exit;
        } else {
            //-> Successful
            $_SESSION["resp_pass"] = "Insert spare parts-sub-product already.";
            header("Location: ../spare_parts_sub_edit.php?id_sub=" . $_POST["id_sub"] . "&p=m#add_brand");
            exit;
        }
    } else {
        //-> Invalid the image.
        $_SESSION["resp_warn"] = "Your file upload invalid image.";
        header("Location: ../spare_parts_sub_edit.php?id_sub=" . $_POST["id_sub"] . "&p=m#add_brand");
        exit;
    }
}
