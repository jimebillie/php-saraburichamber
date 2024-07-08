<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";


try {
    $db_table = "aboutus_structure_" . $_POST["position"];
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
        $newName = uniqid().uniqid() . "." . explode(".", $_FILES['img']['name'])[count(explode(".", $_FILES['img']['name'])) - 1]; //-> newname
        $from = $_FILES['img']['tmp_name']; //-> from
        $to = __DIR__ . "/../images/aboutus/structure/" . $newName; //-> to
        move_uploaded_file($from, $to); //-> move

        $db = CheckHaveRowDB::query("INSERT INTO `$db_table` (`name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES (:__name_th, :__name_en, :__cpn_th, :__cpn_en, :__img)", [
            "__name_th" => $_POST['name_th'],
            "__name_en" => $_POST['name_en'],
            "__cpn_th" => $_POST['cpn_th'],
            "__cpn_en" => $_POST['cpn_en'],
            "__img" => $newName,
        ]);
    } else {
        $db = CheckHaveRowDB::query("INSERT INTO `$db_table` (`name_th`, `name_en`, `cpn_th`, `cpn_en`, `img`) VALUES (:__name_th, :__name_en, :__cpn_th, :__cpn_en, :__img)", [
            "__name_th" => $_POST['name_th'],
            "__name_en" => $_POST['name_en'],
            "__cpn_th" => $_POST['cpn_th'],
            "__cpn_en" => $_POST['cpn_en'],
            "__img" => "",
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
