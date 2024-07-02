<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>หอการค้าจังหวัดสระบุรี</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="../css/reset.css" rel="stylesheet" type="text/css" />
  <link href="../css/header.css" rel="stylesheet" type="text/css" />
  <link href="../css/header-m.css" rel="stylesheet" type="text/css" />
  <link href="../css/header-t.css" rel="stylesheet" type="text/css" />
  <link href="../css/content.css" rel="stylesheet" type="text/css" />
  <link href="../css/content-m.css" rel="stylesheet" type="text/css" />
  <link href="../css/content-t.css" rel="stylesheet" type="text/css" />
  <link href="../css/footer.css" rel="stylesheet" type="text/css" />
  <link href="../css/footer-m.css" rel="stylesheet" type="text/css" />
  <link href="../css/footer-t.css" rel="stylesheet" type="text/css" />
  <link href="../css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="header">
    <?php include 'inc/logo-language.php'; ?>

    <?php include 'inc/menu.php'; ?>

  </div>
  <div class="content">
    <div class="left-all">
      <div class="box-main">
        <div class="title-top">เกี่ยวกับเรา</div>
        <div class="box-menu-sub">
          <ul>
            <li><a href="aboutus.php">เกี่ยวกับเรา</a></li>
            <li><a href="aboutus-history.php">ประวัติหอการค้าจังหวัดสระบุรี</a></li>
            <li><a href="aboutus-rolesandmissions.php">หน้าที่และภารกิจ</a></li>
            <li><a href="aboutus-structure.php">โครงสร้างองค์กร</a></li>
          </ul>

        </div>
        <div class="box-text-aboutus">
          <div class="title-aboutus">ประวัติหอการค้าจังหวัดสระบุรี</div>
          <div class="text-aboutus">
            <?php
            $aboutus_panel2 = CheckHaveRowDB::slectFrom("aboutus_panel2")['data'];
            foreach ($aboutus_panel2 as $k => $v) {
            ?>
              <?=
              nl2br($v['th']);
              ?>
            <?php
            }
            ?>
          </div>

        </div>
        <?php include 'inc/btn-register-all.php'; ?>
      </div>

    </div>






  </div>
  <?php include 'inc/footer.php'; ?>


</body>

</html>