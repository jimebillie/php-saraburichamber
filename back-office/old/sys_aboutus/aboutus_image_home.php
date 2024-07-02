<?php
session_start();
require_once("../database/connect.php");
$db = new connect();

if (!isset($_FILES["aboutus_image"])) {
    $_SESSION["resp_err"] = "Something went wrong.";
    header("Location: ../aboutus.php");
    exit;
} else {
    $file = $_FILES["aboutus_image"];

    /**
     * Check if the file is a valid image
     */

    $type_file = explode("/", $file["type"]);
    if ($type_file[0] !== "image") {
        // Invalid image
        $_SESSION["resp_warn"] = "Your file is not an image, Please new upload again.";
        header("Location: ../aboutus.php");
        exit;
    } else {
        // Valid image

        $db_count = 0;
        try {
            $stmt = $db->conn->prepare("SELECT COUNT(id) as _count FROM `aboutus_image_home`");
            $stmt->execute();
            $result = $stmt->fetch();
            $db_count = $result["_count"];
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if ($db_count <= 0) {
            /**
             * Make new name file.
             */
            $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
            $newName = date("YmdHis") . "-aboutus-home" . $file_extension;
            /**
             * Move file upload
             */
            try {
                move_uploaded_file($file["tmp_name"], "../images/aboutus/" . $newName);
            } catch (Exception $e) {
                echo $e;
            }
            /**
             * Insert to DB
             */
            try {
                $stmt = $db->conn->prepare("INSERT INTO `aboutus_image_home`(`img`) VALUES (:img)");
                $stmt->execute(["img" => $newName]);
            } catch (Exception $e) {
                echo $e;
            }

            /**
             * Seccessful
             */
            $_SESSION["resp_pass"] = "Insert image slide already ";
            header("Location: ../aboutus.php");
            exit;
        } else {
            try {
                /**
                 * Select one row data from database.
                 */
                $stmt = $db->conn->prepare("SELECT * FROM `aboutus_image_home`");
                $stmt->execute();
                $result = $stmt->fetch();

                if (file_exists("../images/aboutus/" . $result["img"])) {
                    //-> have image in storage true
                    unlink("../images/aboutus/" . $result["img"]);
                    /**
                     * Make new name file.
                     */
                    $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
                    $newName = date("YmdHis") . "-aboutus-home" . $file_extension;
                    /**
                     * Move file upload
                     */
                    try {
                        move_uploaded_file($file["tmp_name"], "../images/aboutus/" . $newName);
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                    /**
                     * Insert to DB
                     */
                    try {
                        $stmt = $db->conn->prepare("UPDATE `aboutus_image_home` SET `img`=:_img WHERE `id`=:_id");
                        $stmt->execute(["_img" => $newName, "_id" => $result["id"]]);
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }

                    /**
                     * Seccessful
                     */
                    $_SESSION["resp_pass"] = "Insert image already";
                    header("Location: ../aboutus.php");
                    exit;
                } else {
                    //-> not have image in storage

                    /**
                     * Make new name file.
                     */
                    $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
                    $newName = date("YmdHis") . "-aboutus-home" . $file_extension;
                    /**
                     * Move file upload
                     */
                    try {
                        move_uploaded_file($file["tmp_name"], "../images/aboutus/" . $newName);
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                    /**
                     * Insert to DB
                     */
                    try {
                        $stmt = $db->conn->prepare("UPDATE `aboutus_image_home` SET `img`=:_img WHERE `id`=:_id");
                        $stmt->execute(["_img" => $newName, "_id" => $result["id"]]);
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }

                    /**
                     * Seccessful
                     */
                    $_SESSION["resp_pass"] = "Insert image already";
                    header("Location: ../aboutus.php");
                    exit;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
