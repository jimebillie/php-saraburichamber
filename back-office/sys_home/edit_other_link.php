<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


try {

    $oldData = CheckHaveRowDB::slectFrom("home_other_link", $_POST["id"]);
    $formDel = __DIR__ . "/../images/home/home_link/" . $oldData['data'][0]['img']; //-> to
    if (isset($_FILES['img']) && $_FILES["img"]['name'] !== "") {
        /**
         * Check type file
         */
        if (explode("/", $_FILES['img']['type'])[0] !== "image") {
            throw new Exception("โปรดใช้ไฟล์รูปภาพเท่านั้น");
        }
        if (file_exists($formDel)) {
            unlink($formDel); //-> unlink
        }
        $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['img']['name'])[count(explode(".", $_FILES['img']['name'])) - 1]; //-> newname
        $from = $_FILES['img']['tmp_name']; //-> from
        $to = __DIR__ . "/../images/home/home_link/" . $newName; //-> to
        move_uploaded_file($from, $to); //-> move

        $db = CheckHaveRowDB::query("UPDATE `home_other_link` SET `link`=:__link,`img`=:__img WHERE `id`=:__id", [
            "__link" => $_POST['link'],
            "__img" => $newName,
            "__id" => $_POST['id'],
        ]);
    } else {
        $db = CheckHaveRowDB::query("UPDATE `home_other_link` SET `link`=:__link WHERE `id`=:__id", [
            "__link" => $_POST['link'],
            "__id" => $_POST['id'],
        ]);
    }

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
