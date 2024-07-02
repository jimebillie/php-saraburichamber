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
                            <a href="news.php">
                                ข่าวสารและกิจกรรม
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">จัดการข้อมูล</li>
                    </ol>
                </div>
            </div>

            <div>
                <?php
                $news_old = CheckHaveRowDB::slectFrom("news", $_GET['id']);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="card sticky top-[50px]">
                            <div class="card-header">
                                - แก้ไขข้อมูลข่าวสาร : ( <?= $news_old['data'][0]['_nam_th'] ?? '' ?> )
                            </div>
                            <div class="card-body">
                                <form action="./sys_news/add_news.php" method="post" enctype="multipart/form-data">

                                    <div class="my-3">
                                        <img class="w-[300px]" src="./images/news/<?= $news_old['data'][0]['_img'] ?? '' ?>" alt="">
                                    </div>

                                    <label for="">แก้ไข รูปภาพ <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="edit" value="_main" hidden>
                                    <input class="form-control mb-3" type="text" name="id" value="<?= $news_old['data'][0]['id'] ?? '' ?>" hidden>
                                    <input class="form-control mb-3" type="file" name="_img">
                                    <label for="">แก้ไข หัวข้อข่าว แสดงหน้าภาษาไทย <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="_nam_th" required value="<?= $news_old['data'][0]['_nam_th'] ?? '' ?>">
                                    <label for="">แก้ไข หัวข้อข่าว แสดงหน้าภาษาอังกฤษ <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="_nam_en" required value="<?= $news_old['data'][0]['_nam_en'] ?? '' ?>">
                                    <label for="">แก้ไข รายละเอียดย่อ แสดงหน้าภาษาไทย<span class="text-xs"></span> :</label>
                                    <textarea class="form-control mb-3" rows="5" name="_desc_th" required><?= $news_old['data'][0]['_desc_th'] ?? '' ?></textarea>
                                    <label for="">แก้ไข รายละเอียดย่อ แสดงหน้าภาษาอังกฤษ<span class="text-xs"></span> :</label>
                                    <textarea class="form-control mb-3" rows="5" name="_desc_en" required><?= $news_old['data'][0]['_desc_en'] ?? '' ?></textarea>
                                    <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                แก้ไขรายละเอียดข่าว แสดงหน้าภาษาไทย
                            </div>
                            <div class="card-body">
                                <form action="./sys_news/add_news.php" method="post" enctype="multipart/form-data">

                                    <input class="form-control mb-3" type="text" name="edit" value="_desc_2_th" hidden>
                                    <input class="form-control mb-3" type="text" name="id" value="<?= $news_old['data'][0]['id'] ?? '' ?>" hidden>
                                    <textarea class="summernote" name="_desc_2_th"><?= $news_old['data'][0]['_desc_2_th'] ?? '' ?></textarea>
                                    <button class="btn btn-success w-[100%] mt-3" type="submit">บันทึก</button>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                แก้ไขรายละเอียดข่าว แสดงหน้าภาษาอังกฤษ
                            </div>
                            <div class="card-body">
                                <form action="./sys_news/add_news.php" method="post" enctype="multipart/form-data">

                                    <input class="form-control mb-3" type="text" name="edit" value="_desc_2_en" hidden>
                                    <input class="form-control mb-3" type="text" name="id" value="<?= $news_old['data'][0]['id'] ?? '' ?>" hidden>
                                    <textarea class="summernote" name="_desc_2_en"><?= $news_old['data'][0]['_desc_2_en'] ?? '' ?></textarea>
                                    <button class="btn btn-success w-[100%] mt-3" type="submit">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-3">
                        <!-- P4 -->
                        <div class="card mb-[50px]">
                            <div id="panel4" class="card-header">
                                เพิ่มรูปภาพ
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="./sys_news/add_panel_4.php" method="post" enctype="multipart/form-data">
                                                    <input class="form-control mb-3" type="text" name="id" value="<?= $news_old['data'][0]['id'] ?? '' ?>" hidden>
                                                    <div class="mb-3">
                                                        <label for="">เลือกรูปภาพ (วางและเลือกได้หลายภาพ) <span class="text-xs"></span> :</label>
                                                        <input class="form-control" type="file" name="pc[]" id="slide" multiple required>

                                                        <div class="mt-3">
                                                            <button class="btn btn-success" type="submit">
                                                                บันทึก
                                                            </button>
                                                        </div>
                                                </form>

                                                <?php
                                                try {
                                                    $stmt = $db->conn->prepare("SELECT * FROM `news_pic` WHERE `id_main`=$_GET[id] order by id desc");
                                                    $stmt->execute();
                                                    $stmt_count = $db->conn->prepare("SELECT COUNT(id) as _count FROM `news_pic` WHERE`id_main`=$_GET[id] order by id desc");
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
                                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/news/<?= $row["img"] ?>" alt="slide" billie-gallery="slide-<?= rand(1, 9999) ?>">
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
                    window.location.href = `sys_news/del_panel_4.php?id=` + id
                }
            }
        </script>

</body>

</html>