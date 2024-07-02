<?php
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

use Helper\CheckHaveRowDB\CheckHaveRowDB;

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
                            หน้าแรก - เกี่ยวกับเรา
                        </li>
                    </ol>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - รูปภาพ
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="./sys_home/add_home_aboutus_img.php" method="post" enctype="multipart/form-data">
                                    <?php
                                    if (CheckHaveRowDB::slectFrom("home_aboutus_img")['rows'] !== 0) {
                                        $data_img = CheckHaveRowDB::slectFrom("home_aboutus_img")['data'][0];
                                    ?>
                                        <div class="w-[200px] h-[200px] mb-3 shadow-md border rounded-lg overflow-hidden ">
                                            <img src="./images/home/home_aboutus/<?= $data_img['img'] ?>" class="w-[100%] h-[100%] object-center object-cover">
                                        </div>
                                    <?php
                                    }

                                    ?>
                                    <input class="form-control mb-3" type="file" name="img" required>
                                    <button class="btn btn-success w-full">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - รายละเอียด แสดงในหน้าภาษาไทย
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="./sys_home/add_aboutus_th.php" method="post" enctype="multipart/form-data">
                                    <div>
                                        <?php
                                        $data_th = "";
                                        if (CheckHaveRowDB::slectFrom("home_aboutus_th")['rows'] !== 0) {
                                            $data_th = CheckHaveRowDB::slectFrom("home_aboutus_th")['data'][0]["detail"];
                                        }
                                        ?>
                                        <textarea id="summernote1" name="detail" required><?= $data_th ?></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-success w-[100%] mt-3" type="submit">
                                            บันทึก
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - รายละเอียด แสดงในหน้าภาษาอังกฤษ
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="./sys_home/add_aboutus_en.php" method="post" enctype="multipart/form-data">
                                    <div>
                                        <?php
                                        $data_en = "";
                                        if (CheckHaveRowDB::slectFrom("home_aboutus_en")['rows'] !== 0) {
                                            $data_en = CheckHaveRowDB::slectFrom("home_aboutus_en")['data'][0]["detail"];
                                        }
                                        ?>
                                        <textarea id="summernote2" name="detail" required><?= $data_en ?></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-success w-[100%] mt-3" type="submit">
                                            บันทึก
                                        </button>
                                    </div>
                                </form>
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
        $('#summernote1').summernote({
            tabsize: 2,
            height: 200,
        });
        $('#summernote2').summernote({
            tabsize: 2,
            height: 200,
        });
    </script>
    <!-- \.Summernote -->
</body>

</html>