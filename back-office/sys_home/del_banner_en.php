<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


/**
 * Check if the id is a valid id.
 */
try {
    $stmt = $db->conn->prepare("SELECT * FROM `home_banner_en` WHERE `id`=:id");
    $stmt->execute(["id" => $_GET["id"]]);

    $count_stmt = 0;
    foreach ($stmt->fetchAll() as $row) {
        /**
         * Unlik file
         */
        if (file_exists("../images/home/banner/en/" . $row['pc']) &&  file_exists("../images/home/banner/en/" . $row['mobile'])) {
            unlink("../images/home/banner/en/" . $row['pc']);
            unlink("../images/home/banner/en/" . $row['mobile']);

            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `home_banner_en` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
                $_SESSION["resp_pass"] = "Delete image already.";
                header("Location: ../dashboard.php");
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `home_banner_en` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
                $_SESSION["resp_pass"] = "Delete image already.";
                header("Location: ../dashboard.php");
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }


        $count_stmt += 1;
    }
    if ($count_stmt === 0) {
        header("Location: ../dashboard.php");
        exit;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
