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
  <script src="../js/jquery.min.js"></script>
</head>

<body>
  <div class="header">
    <?php include 'inc/logo-language.php'; ?>

    <?php include 'inc/menu.php'; ?>

  </div>
  <div class="content">
    <div class="left-all">
      <div class="box-main">
        <div class="title-top">ข่าวสารและกิจกรรม</div>
        <div class="box-menu-sub">
          <ul>
            <li><a href="news&amp;activity.php">ข่าวสารและกิจกรรม</a></li>
            <li><a href="news&amp;activity-picture.php">ภาพกิจกรรม</a></li>
          </ul>

        </div>
        <div class="box-text-aboutus">
          <div class="title-aboutus">ภาพกิจกรรม</div>

          <?php
          $activity_picture = CheckHaveRowDB::slectFrom("activity_picture")['data'];
          foreach (array_reverse($activity_picture) as $k => $v) {
          ?>
            <div class="box-news-economy">
              <div class="picture-news-economy"><a href="news&amp;activity-picture-detail.php?id=<?= $v['id'] ?>"><img src="../back-office/images/activity/<?= $v['_img'] ?>" width="330" height="220" /></a></div>
              <div class="title-news-economy"><a href="news&amp;activity-picture-detail.php?id=<?= $v['id'] ?>"><?= $v['_topic_th'] ?></a></div>
            </div>

          <?php
          }
          ?>




          <a href="#" id="loadMore">โหลดดูอีก</a>
        </div>

        <?php include 'inc/btn-register-all.php'; ?>
      </div>

    </div>






  </div>
  <?php include 'inc/footer.php'; ?>

  <script>
    $(document).ready(function() {
      $(".box-news-economy").slice(0, 6).show();
      $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".box-news-economy:hidden").slice(0, 6).slideDown();
        if ($(".box-news-economy:hidden").length == 0) {
          $("#loadMore").text("....").addClass("nobox-news-economy");
        }
      });
    });
  </script>
</body>

</html>