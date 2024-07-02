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
        $stmt = $db->conn->prepare("SELECT * FROM `portfolio` WHERE `id`=:id");
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
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `portfolio` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }

        /**
         * sub
         */
        $stmt2 = $db->conn->prepare("SELECT * FROM `portfolio_sub` WHERE `id_main`=:id");
        $stmt2->execute(["id" => $_GET["id"]]);

        $count_stmt2 = 0;
        foreach ($stmt2->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/portfolio/" . $row['image'])) {
                unlink("../images/portfolio/" . $row['image']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt2_1 = $db->conn->prepare("DELETE FROM `portfolio_sub` WHERE `id_main`=:id");
                    $stmt2_1->execute(["id" => $row["id_main"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt2_2 = $db->conn->prepare("DELETE FROM `portfolio_sub` WHERE `id_main`=:id");
                    $stmt2_2->execute(["id" => $row["id_main"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt2 += 1;
        }

        /**
         * sub image
         */
        $stmt3 = $db->conn->prepare("SELECT * FROM `portfolio_sub_image` WHERE `id_main`=:id");
        $stmt3->execute(["id" => $_GET["id"]]);

        $count_stmt3 = 0;
        foreach ($stmt3->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/portfolio/" . $row['img'])) {
                unlink("../images/portfolio/" . $row['img']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt3_1 = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id_main`=:id");
                    $stmt3_1->execute(["id" => $row["id_main"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt3_2 = $db->conn->prepare("DELETE FROM `portfolio_sub_image` WHERE `id_main`=:id");
                    $stmt3_2->execute(["id" => $row["id_main"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt3 += 1;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }


    /**
     * Respone
     */
    $_SESSION["resp_pass"] = "Delete portfolio already.";
    header("Location: ../portfolio.php");
    exit;
}
