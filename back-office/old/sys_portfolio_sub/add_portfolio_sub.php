<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

/**
 * Middleware
 */
if (!isset($_POST["name"]) || !isset($_FILES["image"]) || !isset($_POST['id'])) {
    header("Location: ../portfolio.php");
    exit;
} else {
    $file = $_FILES["image"];

    /**
     * Check if the file is a valid image
     */

    $type_file = explode("/", $file["type"]);
    if ($type_file[0] !== "image") {
        // Invalid image
        $_SESSION["resp_warn"] = "Your file is not an image, Please new upload again.";
        header("Location: ../portfolio_edit.php?id=".$_POST['id']);
        exit;
    } else {
        // Valid image

        /**
         * Make new name file.
         */
        $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
        $newName = date("YmdHis") . "-portfolio-sub" . $file_extension;
        /**
         * Move file upload
         */
        try {
            move_uploaded_file($file["tmp_name"], "../images/portfolio/" . $newName);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        /**
         * Insert to DB
         */
        try {
            $stmt = $db->conn->prepare("INSERT INTO `portfolio_sub`(`id_main`,`name`, `image`) VALUES (:__id_main, :__name,:__image)");
            $stmt->execute(["__id_main"=>$_POST['id'],"__name" => $_POST["name"], "__image" => $newName]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        /**
         * Seccessful
         */
        $_SESSION["resp_pass"] = "Insert portfolio-sub already ";
        header("Location: ../portfolio_edit.php?id=".$_POST["id"]."&p=m#portfolio_all");
        exit;
    }
}
