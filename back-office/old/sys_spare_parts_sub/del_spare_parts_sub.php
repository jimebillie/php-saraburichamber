<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../spare_parts.php");
    exit;
} else {
    /**
     * sub
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub` WHERE `id`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/spare_parts/" . $row['image'])) {
                unlink("../images/spare_parts/" . $row['image']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub` WHERE `id`=:id");
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
     * product.
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub_product` WHERE `id_sub`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/spare_parts/" . $row['image'])) {
                unlink("../images/spare_parts/" . $row['image']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub_product` WHERE `id_sub`=:id");
                    $stmt->execute(["id" => $row["id_sub"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub_product` WHERE `id_sub`=:id");
                    $stmt->execute(["id" => $row["id_sub"]]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }
        if ($count_stmt === 0) {
            $_SESSION["resp_pass"] = "Delete spare_parts_sub already.";
            header("Location: ../spare_parts_edit.php?id=" . $row["id_main"] . "&p=m#");
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
