<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    /**
     * main
     */
    $oldData = CheckHaveRowDB::slectFrom("benefits_good_product_slide", $_GET["id"]);
    $form = __DIR__ . "/../images/benefits/good_product/" . $oldData['data'][0]['img']; //-> to
    if (file_exists($form)) {
        unlink($form); //-> unlink
    }
    $_table = $_GET['table'];
    $db = CheckHaveRowDB::query("DELETE FROM `benefits_good_product_slide` WHERE `id`=:__id", [
        "__id" => $_GET['id']
    ]);
?>
    <script>
        window.history.back();
    </script>
<?php
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
