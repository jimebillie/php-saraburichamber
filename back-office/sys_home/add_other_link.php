<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


try {

    /**
     * Check type file
     */
    if (explode("/", $_FILES['img']['type'])[0] !== "image") {
        throw new Exception("โปรดใช้ไฟล์รูปภาพเท่านั้น");
    }

    $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['img']['name'])[count(explode(".", $_FILES['img']['name'])) - 1]; //-> newname
    $from = $_FILES['img']['tmp_name']; //-> from
    $to = __DIR__ . "/../images/home/home_link/" . $newName; //-> to
    move_uploaded_file($from, $to); //-> move
    $db = CheckHaveRowDB::query("INSERT INTO `home_other_link`(`link`, `img`) VALUES (:__link, :__img)", [
        "__link" => $_POST['link'],
        "__img" => $newName
    ]);
    header("Location: ../home_other_link.php");
    exit();
} catch (Exception $e) {
?>
    <script>
        alert('<?= $e->getMessage() ?>')
        window.history.back()
    </script>
<?php
    exit();
}
