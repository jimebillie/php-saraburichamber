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
        <div class="title-top">สิทธิประโยชน์สมาชิก</div>
        <div class="box-menu-sub">
          <ul>
            <li><a href="benefits.php">สิทธิประโยชน์สมาชิก</a></li>
            <li><a href="benefits-member.php">เครือข่ายสมาชิก</a></li>
            <li><a href="benefits-good-product.php">ป้ายของดีหอการค้าจังหวัดสระบุรี</a></li>
          </ul>

        </div>
        <div class="box-text-aboutus">
          <div class="title-aboutus">เครือข่ายสมาชิก</div>
          <?php
          $stmt = $db->conn->prepare("SELECT * FROM `form_registration` WHERE `approve_status`='1'");
          $stmt->execute();
          foreach ($stmt->fetchAll() as $k_count => $v_count) {
          ?>
            <div class="picture-benefits-member"> <a href="member.php?id=<?= $v_count['id'] ?>"><img src="../back-office/images/member/<?= $v_count['logo'] ?>" width="260" height="160" /></a>
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
      $(".picture-benefits-member").slice(0, 10).show();
      $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".picture-benefits-member:hidden").slice(0, 10).slideDown();
        if ($(".picture-benefits-member:hidden").length == 0) {
          $("#loadMore").text("....").addClass("nopicture-benefits-member");
        }
      });
    });
  </script>

</body>

</html>