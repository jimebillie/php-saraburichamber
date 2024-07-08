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

    $_newName = uniqid().uniqid() . "." . explode(".", $_FILES['img']['name'])[count(explode(".", $_FILES['img']['name'])) - 1]; //-> newname
    $_from = $_FILES['img']['tmp_name']; //-> from
    $_to = __DIR__ . "/../images/home/home_link/" . $_newName; //-> to
    move_uploaded_file($_from, $_to);
    $db = CheckHaveRowDB::query("INSERT INTO `home_other_link`(`link`, `img`) VALUES (:__link, :__img)", [
        "__link" => $_POST['link'],
        "__img" => $_newName
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
