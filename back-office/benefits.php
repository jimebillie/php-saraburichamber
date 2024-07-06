<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

session_start();
/**
 * Middleware 
 */
if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
    exit;
}
$data_dashboard = require_once("helper/data_dashboard.php"); //-> Data dashboard
require_once __DIR__ . "/helper/check_row_db.php";
require_once __DIR__ . "/database/connect.php";
$db = new \connect();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/bootstrap-5.3.1/css/bootstrap.min.css">
    <!--\.bootstrap-->
    <!--fontawesome-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/fontawesome-6.4.2/css/all.min.css">
    <!--\.fontawesome-->
    <!--dashboard-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/css/dashboard.css">
    <!--\.dashboard-->
    <!--3illie-gallery-plugin-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/env-3illie-gallery-plugin/css/billie-gallery.css">
    <!--.\3illie-gallery-plugin-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- \.Jquery -->
    <!-- Summernote -->
    <link href="summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">
    <script src="summernote-0.8.18-dist/summernote-lite.min.js"></script>
    <!-- \.Summernote -->
</head>

<body>

    <nav class="nav_show">
        <div class="wrap-content">
            <div id="wrap_fa_bars">
                <i class="fa-solid fa-bars ps-2" style="cursor: pointer" onclick="collapse_aside()"></i>
            </div>
            <b class="mb-0 fw-semibold ps-2" id="name_app"><?= $data_dashboard["name_web"] ?> - Back Office</b>
        </div>
    </nav>

    <aside class="aside_show">
        <div class="aside_close">
            <i class="fa-solid fa-circle-chevron-left" style="cursor: pointer" onclick="collapse_aside()"></i>
        </div>

        <div class="wrap_profile">
            <div style="width: 60px;">
                <img style="cursor: pointer; width:100%" src="https://cdn-icons-png.flaticon.com/512/6024/6024190.png" alt="Profile Image" billie-gallery="รูปโปรไฟล์">
            </div>
            <div class="wrap_profile_name">
                <div class="mb-0 status_login">
                    <i class="fa-solid fa-circle text-success me-1" style="font-size: xx-small"></i>ออนไลน์
                </div>
                <div class="wrap_name">
                    <!--Detail Profile-->
                    <?php require_once("components/detail_profile.php"); ?>
                    <!--\.Detail Profile-->
                </div>
            </div>
        </div>

        <!--aside Menu-->
        <?php require_once("components/aside_menu.php"); ?>
        <!--\.aside Menu-->


        <!--copyright-->
        <div class="wrap_aside_copyright">
            &copy; 2024
        </div>
        <!--\.copyright-->

    </aside>

    <!--content-->
    <div id="wrap-content" class="content_show">
        <div class="area-content">

            <div class="mb-5">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page">สิทธิประโยชน์สมาชิก</li>
                    </ol>
                </div>
            </div>

            <div>


                <!-- P1 -->
                <div class="card mb-[50px]">
                    <div class="card-header text-2xl">
                        - สิทธิประโยชน์สมาชิก
                    </div>
                    <div class="card-body">
                        <form action="./sys_benefits/add_panel_1.php" method="post" enctype="multipart/form-data">
                            <?php
                            $benefit_panel_1 = CheckHaveRowDB::slectFrom("benefit_panel_1");
                            $data_benefit_panel_1 = [
                                "img" => "",
                                "th" => "",
                                "en" => "",
                            ];
                            if ($benefit_panel_1['rows'] > 0) {
                                $data_benefit_panel_1['img'] = $benefit_panel_1['data'][0]['img'];
                                $data_benefit_panel_1['th'] = $benefit_panel_1['data'][0]['th'];
                                $data_benefit_panel_1['en'] = $benefit_panel_1['data'][0]['en'];
                            }
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            รูปภาพ
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            if ($data_benefit_panel_1["img"] !== 0) {
                                            ?>
                                                <div class="w-[200px] h-[200px] mb-3 shadow-md border rounded-lg overflow-hidden ">
                                                    <img src="./images/benefits/pn1/<?= $data_benefit_panel_1['img'] ?>" class="w-[100%] h-[100%] object-center object-cover">
                                                </div>
                                            <?php
                                            }

                                            ?>
                                            <input class="form-control" type="file" name="__img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"></div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาไทย
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__th" id="" required><?= $data_benefit_panel_1['th'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาอังกฤษ
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__en" id="" required><?= $data_benefit_panel_1['en'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- btn save -->
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>
                                </div>
                                <!-- \.btn save -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P1 -->


                <!-- P2 -->
                <div class="card mb-[50px]">
                    <div id="panel2" class="card-header text-2xl">
                        - สมาชิกหอการค้า แบ่งออกเป็น 2 ประเภท
                    </div>
                    <div class="card-body">
                        <form action="./sys_benefits/add_panel_2.php" method="post">
                            <?php
                            $benefit_panel_2 = CheckHaveRowDB::slectFrom("benefit_panel_2");
                            $data_benefit_panel_2 = [
                                "name_1_th" => "",
                                "name_1_en" => "",
                                "desc_1_th" => "",
                                "desc_1_en" => "",
                                "name_2_th" => "",
                                "name_2_en" => "",
                                "desc_2_th" => "",
                                "desc_2_en" => "",
                            ];
                            if ($benefit_panel_2["rows"] > 0) {
                                foreach ($data_benefit_panel_2 as $k => $v) {
                                    $data_benefit_panel_2[$k] = $benefit_panel_2['data'][0][$k];
                                }
                            }
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            1.
                                        </div>
                                        <div class="card-body">
                                            <!-- text -->
                                            <div class="mb-3">
                                                <label class="mb-2">ประเภทภาษาไทย : </label>
                                                <input class="form-control" type="text" name="name_1_th" value="<?= $data_benefit_panel_2['name_1_th'] ?>">
                                            </div>
                                            <!-- \.text -->
                                            <!-- text -->
                                            <div class="mb-3">
                                                <label class="mb-2">ประเภทภาษาอังกฤษ : </label>
                                                <input class="form-control" type="text" name="name_1_en" value="<?= $data_benefit_panel_2['name_1_en'] ?>">
                                            </div>
                                            <!-- \.text -->
                                            <!-- textarea -->
                                            <div class="mb-3">
                                                <label class="mb-2">รายละเอียดภาษาไทย : </label>
                                                <textarea class="form-control" rows="3" name="desc_1_th" id=""><?= $data_benefit_panel_2['desc_1_th'] ?></textarea>
                                            </div>
                                            <!-- \.textarea -->
                                            <!-- textarea -->
                                            <div class="mb-3">
                                                <label class="mb-2">รายละเอียดภาษาอังกฤษ : </label>
                                                <textarea class="form-control" rows="3" name="desc_1_en" id=""><?= $data_benefit_panel_2['desc_1_en'] ?></textarea>
                                            </div>
                                            <!-- \.textarea -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            2.
                                        </div>
                                        <div class="card-body">
                                            <!-- text -->
                                            <div class="mb-3">
                                                <label class="mb-2">ประเภทภาษาไทย : </label>
                                                <input class="form-control" type="text" name="name_2_th" value="<?= $data_benefit_panel_2['name_2_th'] ?>">
                                            </div>
                                            <!-- \.text -->
                                            <!-- text -->
                                            <div class="mb-3">
                                                <label class="mb-2">ประเภทภาษาอังกฤษ : </label>
                                                <input class="form-control" type="text" name="name_2_en" value="<?= $data_benefit_panel_2['name_2_en'] ?>">
                                            </div>
                                            <!-- \.text -->
                                            <!-- textarea -->
                                            <div class="mb-3">
                                                <label class="mb-2">รายละเอียดภาษาไทย : </label>
                                                <textarea class="form-control" rows="3" name="desc_2_th" id=""><?= $data_benefit_panel_2['desc_2_th'] ?></textarea>
                                            </div>
                                            <!-- \.textarea -->
                                            <!-- textarea -->
                                            <div class="mb-3">
                                                <label class="mb-2">รายละเอียดภาษาอังกฤษ : </label>
                                                <textarea class="form-control" rows="3" name="desc_2_en" id=""><?= $data_benefit_panel_2['desc_2_en'] ?></textarea>
                                            </div>
                                            <!-- \.textarea -->
                                        </div>
                                    </div>
                                </div>
                                <!-- btn save -->
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>
                                </div>
                                <!-- \.btn save -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P2 -->


                <!-- P3 -->
                <div class="card mb-[50px]">
                    <div id="panel3" class="card-header text-2xl">
                        - สิทธิประโยชน์สมาชิกที่จะได้รับ
                    </div>
                    <div class="card-body">
                        <form action="./sys_benefits/add_panel_3.php" method="post">
                            <?php
                            $benefit_panel_3 = CheckHaveRowDB::slectFrom("benefit_panel_3");
                            $data_benefit_panel_3 = [];
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาไทย
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            for ($i = 0; $i < 6; $i++) {
                                                if ($benefit_panel_3['rows'] === 0) {
                                                    $data_benefit_panel_3["name_th_" . $i + 1] = "";
                                                    $data_benefit_panel_3["desc_th_" . $i + 1] = "";
                                                } else {
                                                    $data_benefit_panel_3["name_th_" . $i + 1] = $benefit_panel_3['data'][0]['name_th_' . $i + 1];
                                                    $data_benefit_panel_3["desc_th_" . $i + 1] = $benefit_panel_3['data'][0]['desc_th_' . $i + 1];
                                                }
                                            ?>
                                                <!-- text -->
                                                <div class="mb-3">
                                                    <label class="mb-2">สิทธิประโยชน์ที่ <?= $i + 1 ?> : </label>
                                                    <input class="form-control" type="text" name="name_th_<?= $i + 1 ?>" value="<?= $data_benefit_panel_3["name_th_" . $i + 1] ?>">
                                                </div>
                                                <!-- \.text -->
                                                <!-- textarea -->
                                                <div class="mb-3">
                                                    <label class="mb-2">รายละเอียดสิทธิประโยชน์ที่ <?= $i + 1 ?> : </label>
                                                    <textarea class="form-control" rows="3" name="desc_th_<?= $i + 1 ?>" id=""><?= $data_benefit_panel_3["desc_th_" . $i + 1] ?></textarea>
                                                </div>
                                                <!-- \.textarea -->
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาอังกฤษ
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            for ($i = 0; $i < 6; $i++) {
                                                if ($benefit_panel_3['rows'] === 0) {
                                                    $data_benefit_panel_3["name_en_" . $i + 1] = "";
                                                    $data_benefit_panel_3["desc_en_" . $i + 1] = "";
                                                } else {
                                                    $data_benefit_panel_3["name_en_" . $i + 1] = $benefit_panel_3['data'][0]['name_en_' . $i + 1];
                                                    $data_benefit_panel_3["desc_en_" . $i + 1] = $benefit_panel_3['data'][0]['desc_en_' . $i + 1];
                                                }
                                            ?>
                                                <!-- text -->
                                                <div class="mb-3">
                                                    <label class="mb-2">สิทธิประโยชน์ที่ <?= $i + 1 ?> : </label>
                                                    <input class="form-control" type="text" name="name_en_<?= $i + 1 ?>" value="<?= $data_benefit_panel_3["name_en_" . $i + 1] ?>">
                                                </div>
                                                <!-- \.text -->
                                                <!-- textarea -->
                                                <div class="mb-3">
                                                    <label class="mb-2">รายละเอียดสิทธิประโยชน์ที่ <?= $i + 1 ?> : </label>
                                                    <textarea class="form-control" rows="3" name="desc_en_<?= $i + 1 ?>" id=""><?= $data_benefit_panel_3["desc_en_" . $i + 1] ?></textarea>
                                                </div>
                                                <!-- \.textarea -->
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- btn save -->
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>
                                </div>
                                <!-- \.btn save -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P3 -->


                <!-- P4 -->
                <div class="card mb-[50px]">
                    <div id="panel4" class="card-header text-2xl">
                        - เพิ่มรูปภาพ
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="./sys_benefits/add_panel_4.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="">เลือกรูปภาพ <span class="text-xs"></span> :</label>
                                                <input class="form-control" type="file" name="pc" id="slide" required>
                                            </div>
                                            <div class="mt-3">
                                                <button class="btn btn-success" type="submit">
                                                    บันทึก
                                                </button>
                                            </div>
                                        </form>

                                        <?php
                                        try {
                                            $stmt = $db->conn->prepare("SELECT * FROM `benefit_panel_4` order by id desc");
                                            $stmt->execute();
                                            $stmt_count = $db->conn->prepare("SELECT COUNT(id) as _count FROM `benefit_panel_4` order by id desc");
                                            $stmt_count->execute();

                                        ?>
                                            <?php
                                            foreach ($stmt_count->fetchAll() as $row) {
                                                if ($row["_count"] > 0) {
                                            ?>
                                                    <div class="mt-5 text-sm text-zinc-400 text-nowrap">จำนวนทั้งหทด : ( <?= $row["_count"] ?> ) ภาพ</div>
                                                    <div class="mb-3 text-xs text-zinc-300">
                                                        * คลิกที่รูปภาพเพื่อดูภาพขนาดใหญ่
                                                    </div>
                                                <?php
                                                }
                                            }

                                            foreach ($stmt->fetchAll() as $row) {
                                                ?>
                                                <div class="mt-2">
                                                    <div class="overflow-x-auto">
                                                        <div class="flex items-end w-max">
                                                            <div class="w-[100px]">
                                                                <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/benefits/pn4/<?= $row["img"] ?>" alt="slide" billie-gallery="slide-<?= rand(1, 9999) ?>">
                                                            </div>
                                                            <div class="ms-3">
                                                                <span class="underline text-red-700 cursor-pointer" onClick="del_slide('<?= $row['id'] ?>')">
                                                                    ลบ
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } catch (Exception $e) {
                                            echo $e->getMessage();
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- \.P4 -->
            </div>

        </div>
    </div>
    <!--\.content-->

    <!--bootstrap-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    <!--\.bootstrap-->
    <!--fontawesome-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/fontawesome-6.4.2/js/all.min.js"></script>
    <!--\.fontawesome-->
    <!--dashboard-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/javascript/dashboard.js"></script>
    <!--\.dashboard-->

    <!--3illie-gallery-plugin-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/env-3illie-gallery-plugin/javascript/billie-gallery.js"></script>
    <!--.\3illie-gallery-plugin-->

    <?php
    if (isset($_SESSION['resp_pass'])) {
    ?>
        <script>
            alert("<?= $_SESSION["resp_pass"] ?>")
        </script>
    <?php
        unset($_SESSION["resp_pass"]);
    }
    ?>


    <!-- Summernote -->
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 200,
        });
    </script>
    <!-- \.Summernote -->

    <script>
        function del_slide(id) {
            if (confirm(
                    "Do you want to delete image ?"
                )) {
                window.location.href = `sys_benefits/del_benefits.php?id=` + id
            }
        }
    </script>
</body>

</html>