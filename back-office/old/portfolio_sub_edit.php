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
require_once("database/connect.php");
$db = new connect();
if (!isset($_GET["id"]) || $_GET["id"] == "") {
    header("Location: portfolio.php");
    exit;
}

$db_portfolio_name = "";
$db_portfolio_image = "";
$db_portfolio_id = "";
$db_portfolio_id_main = "";
try {
    $stmt = $db->conn->prepare("SELECT * FROM `portfolio_sub` where `id` = :_id");
    $stmt->execute(["_id" => $_GET["id"]]);
    foreach ($stmt->fetchAll() as $row) {
        $db_portfolio_name = $row["name"];
        $db_portfolio_image = $row["image"];
        $db_portfolio_id = $row["id"];
        $db_portfolio_id_main = $row["id_main"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
if ($db_portfolio_id === "") {
    header("Location: portfolio.php");
    exit;
}
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">
    <script src="summernote-0.8.18-dist/summernote-lite.min.js"></script>
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
                        <li class="breadcrumb-item underline text-blue-500" aria-current="page">
                            <a href="portfolio_edit.php?id=<?= $db_portfolio_id_main."&p=m"?><?php if(isset($_GET['p'])){echo'#portfolio_all';}?>">
                                ผลงานย่อย
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php
                            if (!isset($_GET["p"])) {
                            ?>
                                แก้ไขผลงานย่อย
                            <?php
                            } else {
                            ?>
                                จัดการ
                            <?php
                            }
                            ?>

                        </li>
                    </ol>
                </div>
            </div>


            <?php
            if (!isset($_GET["p"]) || $_GET["p"] === "") {
            ?>
                <div class="mb-5">
                    <div class="mb-2">
                        <b id="detail2" class="text-2xl">
                            - แก้ไขผลงานย่อย
                        </b>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="sys_portfolio_sub/edit_portfolio_sub.php" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <input type="text" name="id" hidden value="<?= $db_portfolio_id ?>">
                                    <div class="col-12 col-md-6 flex items-center text-nowrap">
                                        <label for="name">
                                            ชื่อผลงาน :
                                        </label>
                                        <input class="form-control ml-2" type="text" name="name" id="name" value="<?= $db_portfolio_name ?>" required>
                                    </div>
                                    <div class="col-12 my-2"></div>
                                    <div class="col-12 col-md-6">
                                        <div class="my-3">
                                            <img class="w-[150px] border-[1px] border-zinc-300" src="images/portfolio/<?= $db_portfolio_image ?>" alt="">
                                        </div>
                                        <label for="image">
                                            รูปภาพ :
                                        </label>
                                        <input class="form-control" type="file" name="image" id="image">
                                    </div>
                                    <div class="col-12 my-2"></div>
                                    <div class="col-12 mt-3">
                                        <button class="btn btn-warning" type="submit">
                                            บันทึก
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            } else {

            ?>
                <div class="mb-5">
                    <div class="mb-2">
                        <?php
                        $name_main = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `portfolio` WHERE `id`=:__id");
                            $stmt->execute(["__id" => $db_portfolio_id_main]);

                            foreach ($stmt->fetchAll() as $row) {
                                $name_main = $row["name"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <b id="detail2" class="text-2xl">
                            - เพิ่มรูปภาพย่อยของ : <span class="text-orange-500">( <?= $name_main . " / " . $db_portfolio_name ?> )</span>

                        </b>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <form id="form_upload_sub_img">
                                <input type="text" name="id" hidden value="<?= $db_portfolio_id ?>">
                                <input type="text" name="id_main" hidden value="<?= $db_portfolio_id_main ?>">
                                <label for="portfolio_sub_img" class="border-dashed border-2 border-zinc-300 rounded-[4px] text-zinc-200 text-center flex justify-center p-[50px] relative">
                                    <input class=" absolute top-0 left-0 right-0 bottom-0 bg-red-500 opacity-0" type="file" name="portfolio_sub_img[]" id="portfolio_sub_img" multiple onChange="upload_files()">
                                    วางรูปภาพที่นี่ หรือคลิก เพื่ออัพโหลด (แบบหลายภาพ)
                                </label>
                            </form>

                        </div>
                    </div>
                </div>



                <div class="mb-5">
                    <div class="mb-2" id="portfolio_sub_image_all">
                        <b class="text-2xl">
                            - รูปภาพของ <span class="text-orange-500">( <?= $db_portfolio_name ?> )</span> ทั้งหมด
                        </b>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <?php
                            try {
                                $stmt = $db->conn->prepare("SELECT * FROM `portfolio_sub_image` WHERE `id_sub`=:__id_sub ORDER BY `id` DESC");
                                $stmt->execute(["__id_sub" => $_GET["id"]]);
                                foreach ($stmt->fetchAll() as $row) {
                            ?>
                                    <div class="flex items-end my-2">
                                        <img class="w-[100px]" src="images/portfolio/<?= $row["img"]; ?>" alt="">
                                        <span class="underline text-red-500 cursor-pointer ml-2" onclick="del_portfolio_sub_image(<?= $row['id'] ?>)">ลบ</span>
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
            <?php

            }
            ?>








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
    <script>
        $('#summernote1').summernote({
            tabsize: 2,
            height: 200,
        });


        function upload_files() {

            const form = document.getElementById('form_upload_sub_img');
            form.action = 'sys_portfolio_sub/add_image_portfolio_sub.php';
            form.method = 'POST';
            form.enctype = 'multipart/form-data';
            form.submit();

        }

        function del_portfolio_sub_image(id) {
            if (confirm("Are you want to delete ?")) {
                window.location.href = "sys_portfolio_sub/del_image_portfolio_sub.php?id=" + id;
            }
        }
    </script>

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
    <?php
    if (isset($_SESSION['resp_warn'])) {
    ?>
        <script>
            alert("<?= $_SESSION["resp_warn"] ?>")
        </script>
    <?php
        unset($_SESSION["resp_warn"]);
    }
    ?>

</body>

</html>