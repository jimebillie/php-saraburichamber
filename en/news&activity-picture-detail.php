<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";
include_once __DIR__ . "/../back-office/database/connect.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

$db = new \connect();
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
        <div class="title-top">News and Activities</div>
        <div class="box-menu-sub">
          <ul>
            <li><a href="news&amp;activity.php">News and Activities</a></li>
            <li><a href="news&amp;activity-picture.php">Activity Pictures</a></li>
          </ul>

        </div>
        <div class="box-text-aboutus">
          <div class="title-aboutus">Activity Pictures</div>
          <?php
          $activity_picture = CheckHaveRowDB::slectFrom("activity_picture", $_GET['id'])['data'];
          foreach (array_reverse($activity_picture) as $k => $v) {
          ?>
            <div class="title-news-detail"><?= $v['_topic_eng'] ?></div>
          <?php
          }
          ?>
          <div class="news-picture-detail">
            <?php
            $activity_picture_each_id = CheckHaveRowDB::slectFrom("activity_picture_each_id", $_GET['id'], "id_main")['data'];
            foreach (array_reverse($activity_picture_each_id) as $k => $v) {
            ?>
              <img src="../back-office/images/activity/<?= $v['img'] ?>" width="330" height="220" />

            <?php
            }
            ?>
          </div>
          <div class="back-all-01"><a href="news&amp;activity-picture.php">
              < Back</a>
          </div>
        </div>

        <?php include 'inc/btn-register-all.php'; ?>
      </div>

    </div>






  </div>
  <?php include 'inc/footer.php'; ?>


</body>

</html>