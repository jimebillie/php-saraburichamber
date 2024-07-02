<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


/**
 * Check if the id is a valid id.
 */
try {
    $stmt = $db->conn->prepare("SELECT * FROM `benefit_panel_4` WHERE `id`=:id");
    $stmt->execute(["id" => $_GET["id"]]);

    $count_stmt = 0;
    foreach ($stmt->fetchAll() as $row) {
        /**
         * Unlik file
         */
        if (file_exists("../images/benefits/pn4/" . $row['img'])) {
            unlink("../images/benefits/pn4/" . $row['img']);
            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `benefit_panel_4` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
                header("Location: ../benefits.php#panel4");
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `benefit_panel_4` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
                header("Location: ../benefits.php#panel4");
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }


        $count_stmt += 1;
    }
    if ($count_stmt === 0) {
        header("Location: ../benefits.php#panel4");
        exit;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
