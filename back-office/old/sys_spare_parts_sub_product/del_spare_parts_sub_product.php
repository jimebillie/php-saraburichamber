<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../spare_parts.php");
    exit;
} else {
    /**
     * Check if the id is a valid id.
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub_product` WHERE `id`=:id");
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
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub_product` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete spare_parts_sub_product already.";
                    header("Location: ../spare_parts_sub_edit.php?id_sub=" . $row["id_sub"]."&p=m#brand_all");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `spare_parts_sub_product` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete spare_parts_sub_product already.";
                    header("Location: ../spare_parts_sub_edit.php?id_sub=" . $row["id_sub"]."&p=m#brand_all");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            $count_stmt += 1;
        }
        if ($count_stmt === 0) {
            header("Location: ../spare_parts.php");
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
