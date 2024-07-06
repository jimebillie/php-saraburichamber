<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


try {
    $_table = $_POST["table"];
    $oldData = CheckHaveRowDB::slectFrom($_table, $_POST["id"]);
    $formDel = __DIR__ . "/../images/aboutus/structure/" . $oldData['data'][0]['img']; //-> to
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
        $to = __DIR__ . "/../images/aboutus/structure/" . $newName; //-> to
        move_uploaded_file($from, $to); //-> move

        $db = CheckHaveRowDB::query("UPDATE `$_table` SET `name_th`=:__name_th,`name_en`=:__name_en, `cpn_th`=:__cpn_th,`cpn_en`=:__cpn_en, `img`=:__img WHERE `id`=:__id", [
            "__name_th" => $_POST['name_th'],
            "__name_en" => $_POST['name_en'],
            "__cpn_th" => $_POST['cpn_th'],
            "__cpn_en" => $_POST['cpn_en'],
            "__img" => $newName,
            "__id" => $_POST['id']
        ]);
    } else {
        $db = CheckHaveRowDB::query("UPDATE `$_table` SET `name_th`=:__name_th,`name_en`=:__name_en, `cpn_th`=:__cpn_th,`cpn_en`=:__cpn_en WHERE `id`=:__id", [
            "__name_th" => $_POST['name_th'],
            "__name_en" => $_POST['name_en'],
            "__cpn_th" => $_POST['cpn_th'],
            "__cpn_en" => $_POST['cpn_en'],
            "__id" => $_POST['id']
        ]);
    }

    header("Location: ../aboutus.php#panel4");
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
