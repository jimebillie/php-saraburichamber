<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../portfolio.php");
    exit;
} else {
    /**
     * Del sub
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `portfolio_sub` WHERE `id`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/portfolio/" . $row['image'])) {
                unlink("../images/portfolio/" . $row['image']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    /**
     * Del sub-image
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `portfolio_sub_image` WHERE `id_sub`=:id");
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
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id_sub`=:id");
                    $stmt->execute(["id" => $row["id_sub"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id_sub`=:id");
                    $stmt->execute(["id" => $row["id_sub"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }

        $_SESSION["resp_pass"] = "Delete portfolio-sub already.";
        header("Location: ../portfolio_edit.php?id=" . $row["id_main"] . "&p=m#portfolio_all");
        exit;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
