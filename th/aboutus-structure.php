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
          <div class="title-aboutus">โครงสร้างองค์กร</div>
          <div class="title-structure">ประธานกิตติมศักดิ์</div>

          <?php
          $aboutus_structure_1 = CheckHaveRowDB::slectFrom("aboutus_structure_1")['data'];
          foreach ($aboutus_structure_1 as $k => $v) {
          ?>
            <div class="box-profile">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile"><?= $v['name_th'] ?></div>
              <div class="company-profile"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>
          <a href="#" id="loadMore">โหลดดูอีก</a>

          <div class="title-structure">ประธานกรรมการ</div>
          <?php
          $aboutus_structure_2 = CheckHaveRowDB::slectFrom("aboutus_structure_2")['data'];
          foreach ($aboutus_structure_2 as $k => $v) {
          ?>
            <div class="box-profile-center">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile"><?= $v['name_th'] ?></div>
              <div class="company-profile"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>
          <div class="title-structure">ประธาน YEC จังหวัดสระบุรี</div>
          <?php
          $aboutus_structure_3 = CheckHaveRowDB::slectFrom("aboutus_structure_3")['data'];
          foreach ($aboutus_structure_3 as $k => $v) {
          ?>
            <div class="box-profile-center">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile"><?= $v['name_th'] ?></div>
              <div class="company-profile"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>


          <div class="title-structure">รองประธานกรรมการ</div>
          <?php
          $aboutus_structure_4 = CheckHaveRowDB::slectFrom("aboutus_structure_4")['data'];
          foreach ($aboutus_structure_4 as $k => $v) {
          ?>
            <div class="box-profile-02">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile"><?= $v['name_th'] ?></div>
              <div class="company-profile"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>
          <a href="#" id="loadMore2">โหลดดูอีก</a>

          <div class="title-structure">กรรมการเลขา</div>
          <?php
          $aboutus_structure_5 = CheckHaveRowDB::slectFrom("aboutus_structure_5")['data'];
          foreach ($aboutus_structure_5 as $k => $v) {
          ?>
            <div class="box-profile-03">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile"><?= $v['name_th'] ?></div>
              <div class="company-profile"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>
          <a href="#" id="loadMore3">โหลดดูอีก</a>


          <div class="title-structure">ที่ปรึกษา</div>
          <?php
          $aboutus_structure_6 = CheckHaveRowDB::slectFrom("aboutus_structure_6")['data'];
          foreach ($aboutus_structure_6 as $k => $v) {
          ?>
            <div class="box-profile-small">
              <div class="picture-profile"><img src="../back-office/images/aboutus/structure/<?= $v['img'] ?>" width="160" height="150" /></div>
              <div class="name-profile-small"><?= $v['name_th'] ?></div>
              <div class="company-profile-small"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>
          <a href="#" id="loadMore4">โหลดดูอีก</a>

          <div class="title-structure">กรรมการ</div>
          <?php
          $aboutus_structure_7 = CheckHaveRowDB::slectFrom("aboutus_structure_7")['data'];
          foreach ($aboutus_structure_7 as $k => $v) {
          ?>
            <div class="box-profile-small-02">
              <div class="name-profile-small"><?= $v['name_th'] ?></div>
              <div class="company-profile-small"><?= $v['cpn_th'] ?></div>
            </div>
          <?php
          }
          ?>



          <a href="#" id="loadMore5">โหลดดูอีก</a>
        </div>

        <?php include 'inc/btn-register-all.php'; ?>
      </div>

    </div>






  </div>
  <?php include 'inc/footer.php'; ?>
  <script>
    $(document).ready(function() {
      $(".box-profile").slice(0, 6).show();
      $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".box-profile:hidden").slice(0, 6).slideDown();
        if ($(".box-profile:hidden").length == 0) {
          $("#loadMore").text("....").addClass("nobox-profile");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".box-profile-02").slice(0, 6).show();
      $("#loadMore2").on("click", function(e) {
        e.preventDefault();
        $(".box-profile-02:hidden").slice(0, 6).slideDown();
        if ($(".box-profile-02:hidden").length == 0) {
          $("#loadMore2").text("....").addClass("nobox-profile-02");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".box-profile-03").slice(0, 6).show();
      $("#loadMore3").on("click", function(e) {
        e.preventDefault();
        $(".box-profile-03:hidden").slice(0, 6).slideDown();
        if ($(".box-profile-03:hidden").length == 0) {
          $("#loadMore3").text("....").addClass("nobox-profile-03");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".box-profile-small").slice(0, 10).show();
      $("#loadMore4").on("click", function(e) {
        e.preventDefault();
        $(".box-profile-small:hidden").slice(0, 10).slideDown();
        if ($(".box-profile-small:hidden").length == 0) {
          $("#loadMore4").text("....").addClass("nobox-profile-small");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".box-profile-small-02").slice(0, 10).show();
      $("#loadMore5").on("click", function(e) {
        e.preventDefault();
        $(".box-profile-small-02:hidden").slice(0, 10).slideDown();
        if ($(".box-profile-small-02:hidden").length == 0) {
          $("#loadMore5").text("....").addClass("nobox-profile-small-02");
        }
      });
    });
  </script>

</body>

</html>