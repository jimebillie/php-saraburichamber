<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../portfolio.php");
    exit;
} else {
    /**
     * Check if the id is a valid id.
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `portfolio_sub_image` WHERE `id`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/portfolio/" . $row['img'])) {
                unlink("../images/portfolio/" . $row['img']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete portfolio-sub-image already.";
                    header("Location: ../portfolio_sub_edit.php?id=" . $row["id_sub"]."&p=m#portfolio_sub_image_all");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete portfolio-sub-image already.";
                    header("Location: ../portfolio_sub_edit.php?id=" . $row["id_sub"]."&p=m#portfolio_sub_image_all");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }
        if ($count_stmt === 0) {
            header("Location: ../portfolio.php");
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
