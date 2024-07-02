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
                <div class="title-top">Member Benefits</div>
                <div class="box-menu-sub">
                    <ul>
                        <li><a href="benefits.php">Member Benefits</a></li>
                        <li><a href="benefits-member.php">Member</a></li>
                        <li><a href="benefits-good-product.php">Saraburi Specialties Sign</a></li>
                    </ul>

                </div>
                <div class="box-text-aboutus">
                    <div class="title-aboutus">Saraburi Specialties Sign</div>

                    <?php
                    $benefits_good_product = CheckHaveRowDB::slectFrom("benefits_good_product")['data'];
                    foreach ($benefits_good_product as $k => $v) {
                    ?>
                        <div class="box-good-product-list">
                            <div class="picture-good-product"> <a href="member-good-product.php?id=<?= $v['id'] ?>">
                                    <img src="../back-office/images/benefits/good_product/<?= $v['_cover'] ?>" width="620" height="290" /></a>
                            </div>
                            <div class="name-good-product">
                                <a href="member-good-product.php?id=<?= $v['id'] ?>">
                                    <?= $v['_name'] ?>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>




                </div>
                <?php include 'inc/btn-register-all.php'; ?>
            </div>

        </div>






    </div>
    <?php include 'inc/footer.php'; ?>


</body>

</html>