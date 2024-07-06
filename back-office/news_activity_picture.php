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
                        <li class="breadcrumb-item active" aria-current="page">
                            ข่าวสารและกิจกรรม - ภาพกิจกรรม
                        </li>
                    </ol>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-6">
                        <div class="card sticky top-[50px]">
                            <div class="card-header">
                                - เพิ่มกิจกรรมใหม่
                            </div>
                            <div class="card-body">
                                <form action="./sys_news/add_activity_picture.php" method="post" enctype="multipart/form-data">
                                    <label for="">รูปภาพหน้าปรกกิจกรรม <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="file" name="_img" required>
                                    <label for="">หัวข้อกิจกรรม แสดงหน้าภาษาไทย <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="_topic_th" required>
                                    <label for="">หัวข้อกิจกรรม แสดงหน้าภาษาอังกฤษ <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="_topic_eng" required>

                                    <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                กิจกรรมทั้งหมด
                            </div>
                            <div class="card-body overflow-auto">
                                <table class="table table-striped table-bordered w-[100%]">
                                    <thead>
                                        <tr>
                                            <th>หัวข้อกิจกรรม</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $news =  CheckHaveRowDB::slectFrom("activity_picture");
                                        foreach (array_reverse($news["data"]) as $k => $v) {
                                        ?>
                                            <tr>
                                                <td><?= $v[2] ?></td>
                                                <td>

                                                    <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_news/del_activity_picture.php?id=<?= $v[0] ?>' : false">ลบ</button>

                                                    <button class="btn btn-info" onclick="window.location.href='news_activity_picture_manage.php?id=<?= $v[0] ?>'">
                                                        จัดการข้อมูล
                                                    </button>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
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
            $('#summernote').summernote({
                tabsize: 2,
                height: 200,
            });
        </script>
        <!-- \.Summernote -->
</body>

</html>