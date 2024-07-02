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
                            หน้าแรก - Link เกี่ยวข้อง
                        </li>
                    </ol>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col">
                        <div class="card sticky top-[50px]">
                            <div class="card-header">
                                <div class="text-2xl">
                                    - เพิ่มข้อมูล
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="sys_home/add_other_link.php" method="post" enctype="multipart/form-data">
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">Link : </label>
                                        <input class="form-control" type="text" name="link" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- file -->
                                    <div class="mb-3">
                                        <label class="mb-2">รูปภาพ : </label>
                                        <input class="form-control" type="file" name="img" required>
                                    </div>
                                    <!-- \.file -->
                                    <button type="submit" class="btn btn-success w-full">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <table class="table table-striped table-bordered text-nowrap w-[100%]">
                                    <?php
                                    $dataAll = CheckHaveRowDB::slectFrom("home_other_link");
                                    for ($i = 0; $i < $dataAll["rows"]; $i++) {
                                    ?>
                                        <tr>
                                            <textarea id="dataToModal_<?= $i ?>" hidden><?= json_encode([
                                                                                            "id" => $dataAll['data'][$i]['id'], "link" => $dataAll['data'][$i]['link'], "img" => $dataAll['data'][$i]['img']
                                                                                        ], JSON_UNESCAPED_UNICODE) ?></textarea>
                                            <td>
                                                <?= $dataAll['data'][$i]["link"] ?>
                                            </td>
                                            <td>
                                                <img src="images/home/home_link/<?= $dataAll['data'][$i]["img"] ?>" class="w-[50px] h-[50px] object-cover object-center">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_home/del_other_link.php?id=<?= $dataAll['data'][$i]['id'] ?>' : false">
                                                    ลบ
                                                </button>
                                                <!-- edit open --->
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_other_link" onclick="modalEdit('dataToModal_<?= $i; ?>')">
                                                    แก้ไข
                                                </button>
                                                <!-- \.edit open --->

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Modal edit-->
                    <div class="modal fade" id="edit_other_link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <form action="sys_home/edit_other_link.php" method="post" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            แก้ไขข้อมูล : Link เกี่ยวข้อง
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" name="id" required hidden>
                                        <!-- text -->
                                        <div class="mb-3">
                                            <label class="mb-2">แก้ไขLink : </label>
                                            <input class="form-control" type="text" name="link" required>
                                        </div>
                                        <!-- \.text -->
                                        <div class="my-3">
                                            <img src="" alt="">
                                        </div>
                                        <!-- file -->
                                        <div class="mb-3">
                                            <label class="mb-2">แก้ไขรูปภาพ : </label>
                                            <input class="form-control" type="file" name="img">
                                        </div>
                                        <!-- \.file -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- \.Modal edit-->

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


    <script>
        function modalEdit(data) {
            const dataE = JSON.parse($(`#${data}`).val())
            $(".modal-body > input[name='id']").val(dataE.id)
            $(".modal-body > div >input[name='link']").val(dataE.link)
            $(".modal-body > div > img").attr("src", '')
            $(".modal-body > div > img").attr("src", 'images/home/home_link/' + dataE.img)
            $(".modal-body > div > input[name='img']").val("")
        }
    </script>

</body>

</html>