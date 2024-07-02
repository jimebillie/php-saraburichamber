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
                        <li class="breadcrumb-item underline" aria-current="page">
                            <a href="benefits_good_product.php">
                                สิทธิประโยชน์สมาชิก - ป้ายของดีหอการค้าจังหวัดสระบุรี
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">จัดการข้อมูล</li>
                    </ol>
                </div>
            </div>

            <div>

                <?php
                $benefits_good_product =  CheckHaveRowDB::slectFrom("benefits_good_product", $_GET['id']);
                ?>

                <div class="card mb-[50px]">
                    <div id="panel1" class="card-header text-2xl">
                        - จัดการป้ายของดีหอการค้าจังหวัดสระบุรี : ( <?= $benefits_good_product["data"][0]['_name'] ?> )
                    </div>
                    <div class="card-body">
                        <div class="row">


                            <!-- P1 -->
                            <div class="col-6">
                                <div class="card sticky top-[50px]">
                                    <div class="card-header">
                                        แก้ไขร้านข้อมูลร้าน
                                    </div>
                                    <div class="card-body">
                                        <form action="sys_benefits/add_good_product.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-2">
                                                <img src="./images/benefits/good_product/<?= $benefits_good_product['data'][0]['_cover'] ?>" class="w-[100px] h-[100px] object-cover object-center">
                                            </div>
                                            <div class="mb-2">
                                                <label>แก้ไขรูปหน้าปรก : </label>
                                                <input type="file" class="form-control" name="_cover">
                                            </div>
                                            <div class="mb-2">
                                                <label>แก้ไขชื่อร้าน : </label>
                                                <input type="text" class="form-control" name="_name" required value="<?= $benefits_good_product["data"][0]['_name'] ?>">
                                                <input type="text" class="form-control" name="edit" hidden required value="_cover">
                                                <input type="text" class="form-control" name="id" hidden required value="<?= $benefits_good_product["data"][0]['id'] ?>">
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">
                                                    บันทึก
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <!-- P-Logo -->
                            <div class="col-12"></div>
                            <div class="col-6 mt-3">
                                <div class="card">
                                    <div class="card-header">
                                        เพิ่มรูปภาพ Logo ของร้าน
                                    </div>
                                    <div class="card-body">
                                        <form action="sys_benefits/add_good_product.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-2">
                                                <?php
                                                if ($benefits_good_product['data'][0]['_img_logo'] !== "") {
                                                ?>
                                                    <img src="./images/benefits/good_product/<?= $benefits_good_product['data'][0]['_img_logo'] ?>" class="w-[100px] h-[100px] object-cover object-center">
                                                <?php
                                                }
                                                ?>

                                            </div>
                                            <div class="mb-2">
                                                <label>รูป logo ร้าน : </label>
                                                <input type="file" class="form-control" name="_img_logo" required>
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="edit" hidden required value="_img_logo">
                                                <input type="text" class="form-control" name="id" hidden required value="<?= $benefits_good_product["data"][0]['id'] ?>">
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">
                                                    บันทึก
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>




                            <!-- p2 -->
                            <div class="col-12 mt-3">
                                <div class="card">
                                    <div class="card-header">
                                        จัดการรูปสไลด์
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">

                                                <form action="./sys_benefits/add_good_product_slide.php" method="post" enctype="multipart/form-data">
                                                    <input type="text" name="id" hidden value="<?= $benefits_good_product["data"][0]['id'] ?>" required>
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
                                                    $stmt = $db->conn->prepare("SELECT * FROM `benefits_good_product_slide` WHERE `id_main`=$_GET[id] order by id desc");
                                                    $stmt->execute();
                                                    $stmt_count = $db->conn->prepare("SELECT COUNT(id) as _count FROM `benefits_good_product_slide` WHERE `id_main`=$_GET[id] order by id desc");
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
                                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/benefits/good_product/<?= $row["img"] ?>" alt="slide" billie-gallery="slide-<?= rand(1, 9999) ?>">
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

                            <!-- P3 -->
                            <div class="col-6 mt-3">
                                <div class="card sticky top-[50px]">
                                    <div class="card-header">
                                        เพิ่มรูปภาพ 1 รูป
                                    </div>
                                    <div class="card-body">
                                        <form action="sys_benefits/add_good_product.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-2">
                                                <?php
                                                if ($benefits_good_product['data'][0]['_img'] !== "") {
                                                ?>
                                                    <img src="./images/benefits/good_product/<?= $benefits_good_product['data'][0]['_img'] ?>" class="w-[100px] h-[100px] object-cover object-center">
                                                <?php
                                                }
                                                ?>

                                            </div>
                                            <div class="mb-2">
                                                <label>รูป : </label>
                                                <input type="file" class="form-control" name="_img" required>
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="edit" hidden required value="_img">
                                                <input type="text" class="form-control" name="id" hidden required value="<?= $benefits_good_product["data"][0]['id'] ?>">
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">
                                                    บันทึก
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- P4 -->
                            <div class="col-12"></div>
                            <div class="col-12 mt-3">
                                <div class="card sticky top-[50px]">
                                    <div class="card-header">
                                        เพิ่มรายละเอียดที่ 1
                                    </div>
                                    <div class="card-body">
                                        <form action="sys_benefits/add_good_product.php" method="post">
                                            <textarea class="summernote" name="_desc_1" id=""><?= $benefits_good_product["data"][0]['_desc_1'] ?? "" ?></textarea>
                                            <input type="text" class="form-control" name="edit" hidden required value="_desc_1">
                                            <input type="text" class="form-control" name="id" hidden required value="<?= $benefits_good_product["data"][0]['id'] ?>">
                                            <button type="submit" class="btn btn-success w-[100%] mt-3">
                                                บันทึก
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- P5 -->
                            <div class="col-12"></div>
                            <div class="col-12 mt-3">
                                <div class="card sticky top-[50px]">
                                    <div class="card-header">
                                        เพิ่มรายละเอียดที่ 2
                                    </div>
                                    <div class="card-body">
                                        <form action="sys_benefits/add_good_product.php" method="post">
                                            <textarea class="summernote" name="_desc_2" id=""><?= $benefits_good_product["data"][0]['_desc_2'] ?? "" ?></textarea>
                                            <input type="text" class="form-control" name="edit" hidden required value="_desc_2">
                                            <input type="text" class="form-control" name="id" hidden required value="<?= $benefits_good_product["data"][0]['id'] ?>">
                                            <button type="submit" class="btn btn-success w-[100%] mt-3">
                                                บันทึก
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

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
                    "ต้องการลบหรือไม่ ?"
                )) {
                window.location.href = `sys_benefits/del_good_product_slide.php?id=` + id
            }
        }
    </script>

</body>

</html>