<?php
session_start();
require_once("../database/connect.php");
$db = new connect();






for ($k = 0; $k < count($_FILES['pc']['name']); $k++) {
    /**
     * Check if the file is a valid image
     */

    $type_file = explode("/", $_FILES['pc']["type"][$k]);
    if ($type_file[0] !== "image") {
        // Invalid image
        header("Location: ../news_activity_picture_manage.php?id=" . $_POST['id']);
        exit;
    }
    /**
     * Make new name file.
     */
    $file_extension = "." . explode(".", $_FILES['pc']["name"][$k])[count(explode(".", $_FILES['pc']["name"][$k])) - 1];
    $newName = $_SERVER['UNIQUE_ID'] . "-activity-" . $k . $file_extension;
    /**
     * Move file upload
     */
    try {
        move_uploaded_file($_FILES['pc']["tmp_name"][$k], "../images/activity/" . $newName);
    } catch (Exception $e) {
        echo $e;
    }
    /**
     * Insert to DB
     */
    try {
        $stmt = $db->conn->prepare("INSERT INTO `activity_picture_each_id`(`id_main`,`img`) VALUES (:id_main, :img)");
        $stmt->execute([
            "id_main" => $_POST['id'],
            "img" => $newName
        ]);
    } catch (Exception $e) {
        echo $e;
    }
}



/**
 * Seccessful
 */
header("Location: ../news_activity_picture_manage.php?id=" . $_POST['id']);
exit;
