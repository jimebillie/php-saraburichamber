<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


$file = $_FILES["pc"];

/**
 * Check if the file is a valid image
 */

$type_file = explode("/", $file["type"]);
if ($type_file[0] !== "image") {
    // Invalid image
    header("Location: ../benefits_good_product_manage.php?id=" . $_POST['id']);
    exit;
} else {
    // Valid image

    /**
     * Make new name file.
     */
    $file_extension = "." . explode(".", $file["name"])[count(explode(".", $file["name"])) - 1];
    $newName = uniqid().uniqid() . "-slide-id-" . $_POST['id'] . $file_extension;
    /**
     * Move file upload
     */
    try {
        move_uploaded_file($file["tmp_name"], "../images/benefits/good_product/" . $newName);
    } catch (Exception $e) {
        echo $e;
    }
    /**
     * Insert to DB
     */
    try {
        $stmt = $db->conn->prepare("INSERT INTO `benefits_good_product_slide`(`id_main`, `img`) VALUES (:id_main, :img)");
        $stmt->execute([
            "id_main" => $_POST['id'],
            "img" => $newName
        ]);
    } catch (Exception $e) {
        echo $e;
    }

    /**
     * Seccessful
     */
?>
    <script>
        window.history.back();
    </script>
<?php
    exit;
}
