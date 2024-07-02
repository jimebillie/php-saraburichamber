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
                <div class="title-top">Member Benefits</div>
                <div class="box-menu-sub">
                    <ul>
                        <li><a href="benefits.php">Member Benefits</a></li>
                        <li><a href="benefits-member.php">Member</a></li>
                        <li><a href="benefits-good-product.php">Saraburi Specialties Sign</a></li>
                    </ul>

                </div>
                <div class="box-text-aboutus">
                    <div class="title-aboutus">Member Benefits</div>
                    <div class="benefits-picture">
                        <?php
                        $benefit_panel_1 = CheckHaveRowDB::slectFrom("benefit_panel_1")['data'];
                        foreach ($benefit_panel_1 as $k => $v) {
                        ?>
                            <img src="../back-office/images/benefits/pn1/<?= $v['img'] ?>" width="465" height="310" />
                        <?php
                        }
                        ?>
                    </div>
                    <div class="benefits-title-01">Become a member with us</div>
                    <div class="benefits-title-02">Receive many privileges by being a member of the Saraburi Chamber of Commerce.</div>
                    <div class="benefits-text-01">
                        <?php
                        $benefit_panel_1 = CheckHaveRowDB::slectFrom("benefit_panel_1")['data'];
                        foreach ($benefit_panel_1 as $k => $v) {
                        ?>
                            <?= nl2br($v['en']) ?>
                        <?php
                        }
                        ?>
                    </div>

                </div>
                <div class="box-text-aboutus">
                    <div class="title-aboutus">Chamber of Commerce members are divided into 2 types:</div>
                    <div class="box-benefits-type">

                        <?php
                        $benefit_panel_2 = CheckHaveRowDB::slectFrom("benefit_panel_2")['data'];
                        foreach ($benefit_panel_2 as $k => $v) {
                        ?>
                            <div class="benefits-type-01"><?= $v['name_1_en'] ?></div>
                            <div class="benefits-text-02">
                                <?= nl2br($v['desc_1_en']) ?>
                            </div>
                        <?php
                        }
                        ?>



                    </div>
                    <div class="box-benefits-type">

                        <?php
                        $benefit_panel_2 = CheckHaveRowDB::slectFrom("benefit_panel_2")['data'];
                        foreach ($benefit_panel_2 as $k => $v) {
                        ?>
                            <div class="benefits-type-02"><?= $v['name_2_en'] ?></div>
                            <div class="benefits-text-02">
                                <?= nl2br($v['desc_2_en']) ?>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="box-text-aboutus">
                    <div class="title-aboutus">Member benefits that you will receive are as follows ..</div>
                    <div class="box-benefit-list">

                        <div class="benefit-list-01">
                            <div class="benefit-list-num">1</div>
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_1'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_1']) ?>

                                </div>
                            <?php
                            }
                            ?>




                        </div>
                        <div class="benefit-list-02">

                            <div class="benefit-list-num">2</div>

                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_2'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_2']) ?>

                                </div>
                            <?php
                            }
                            ?>


                        </div>
                        <div class="benefit-list-03">
                            <div class="benefit-list-num">3</div>
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_3'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_3']) ?>

                                </div>
                            <?php
                            }
                            ?>



                        </div>
                        <div class="benefit-list-04">
                            <div class="benefit-list-num">4</div>
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_4'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_4']) ?>

                                </div>
                            <?php
                            }
                            ?>



                        </div>
                        <div class="benefit-list-05">
                            <div class="benefit-list-num">5</div>
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_5'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_5']) ?>

                                </div>
                            <?php
                            }
                            ?>



                        </div>
                        <div class="benefit-list-06">
                            <div class="benefit-list-num">6</div>
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3")['data'];
                            foreach ($benefit_panel_3 as $k => $v) {
                            ?>
                                <div class="benefit-list-title"><?= $v['name_en_6'] ?></div>
                                <div class="benefit-list-text">
                                    <?= nl2br($v['desc_en_6']) ?>

                                </div>
                            <?php
                            }
                            ?>



                        </div>
                    </div>
                    <?php
                    $benefit_panel_4 = CheckHaveRowDB::slectFrom("benefit_panel_4")['data'];
                    foreach ($benefit_panel_4 as $k => $v) {
                    ?>
                        <div class="box-benefit-ad"><img src="../back-office/images/benefits/pn4/<?= $v['img'] ?>" width="454" height="545" /></div>
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