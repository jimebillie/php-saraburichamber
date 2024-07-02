<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_POST["id"]) || !isset($_POST["id_main"]) || !isset($_FILES["portfolio_sub_img"]) || $_FILES["portfolio_sub_img"]["name"][0] === "") {
    header("Location: ../portfolio_sub_edit.php");
    exit;
} else {

    // echo"<pre>";
    // var_dump($_POST);
    // var_dump($_FILES["portfolio_sub_img"]);
    // echo "</pre>";

    $count_err = 0;
    for ($i = 0; $i < count($_FILES["portfolio_sub_img"]["name"]); $i += 1) {
        $file_extension = "." . explode(".", $_FILES["portfolio_sub_img"]["name"][$i])[count(explode(".", $_FILES["portfolio_sub_img"]["name"][$i])) - 1];

        /**
         * New name
         */
        $new_file_name  = date("YmdHis") . "-portfolio-sub-img-" . $i . $file_extension;

        /**
         * Move file upload
         */
        if (!move_uploaded_file($_FILES["portfolio_sub_img"]["tmp_name"][$i], "../images/portfolio/" . $new_file_name)) {
            echo "Failed to move uploaded file: " . htmlspecialchars($_FILES["portfolio_sub_img"]["name"][$i]) . "<br>";
            $count_err = 1;
        }
        if ($count_err === 0) {
            /**
             * Insert to DB
             */
            try {
                $stmt = $db->conn->prepare("INSERT INTO `portfolio_sub_image`(`id_main`,`id_sub`,`img`) VALUES (:__id_main, :__id_sub,:__img)");
                $stmt->execute(["__id_main" => $_POST['id_main'], "__id_sub" => $_POST["id"], "__img" => $new_file_name]);
            } catch (Exception $e) {
                echo $e->getMessage();
                $count_err = 1;
            }
        }
    }
    /**
     * Response
     */
    if ($count_err > 0) {
        /**
         * Error
         */
        $_SESSION["resp_warn"] = "Can't insert portfolio-sub-image, something went wrong!";
        header("Location: ../portfolio_sub_edit.php?id=" . $_POST["id"]."&p=m");
        exit;
    } else {
        /**
         * Seccess
         */
        $_SESSION["resp_warn"] = "Insert portfolio-sub-image already";
        header("Location: ../portfolio_sub_edit.php?id=" . $_POST["id"]."&p=m#portfolio_sub_image_all");
        exit;
    }
}
