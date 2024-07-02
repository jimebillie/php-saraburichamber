<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;
?>


<div class="partner">
    <?php
    $home_other_link = CheckHaveRowDB::slectFrom("home_other_link")['data'];
    foreach ($home_other_link as $k => $v) {
    ?>
        <a href="<?= $v['link'] ?>">
            <img src="../back-office/images/home/home_link/<?= $v['img'] ?>" width="475" height="150" />
        </a>
    <?php
    }
    ?>

</div>