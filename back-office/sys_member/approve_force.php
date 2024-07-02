<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__."/../helper/check_row_db.php";


try{
    $db = CheckHaveRowDB::query("UPDATE `form_registration` SET `approve_status`='1' WHERE `id`=$_GET[id]", []);
    ?>
    <script>
        window.history.back();
    </script>
    <?php
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}