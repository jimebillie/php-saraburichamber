<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


if (!isset($_GET['id']) || $_GET['id'] === "") {
    header("Location: ../service.php");
    exit;
} else {
    /**
     * Check if the id is a valid id.
     */
    try {
        $stmt = $db->conn->prepare("SELECT * FROM `service` WHERE `id`=:id");
        $stmt->execute(["id" => $_GET["id"]]);

        $count_stmt = 0;
        foreach ($stmt->fetchAll() as $row) {
            /**
             * Unlik file
             */
            if (file_exists("../images/service/" . $row['service_image'])) {
                unlink("../images/service/" . $row['service_image']);
                /** 
                 * Delete from database.
                 */
                try {
                    $stmt = $db->conn->prepare("DELETE FROM `service` WHERE `id`=:id");
                    $stmt->execute(["id" => $row["id"]]);
                    $_SESSION["resp_pass"] = "Delete image service already.";
                    header("Location: ../service.php");
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                header("Location: ../service.php");
                exit;
            }


            $count_stmt += 1;
        }
        if ($count_stmt === 0) {
            header("Location: ../service.php");
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
