<?php

use function PHPSTORM_META\type;

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
    header("Location: spare_parts.php"); //-> Change
    exit;
}

$db_spare_parts_sub_product_id = "";
$db_spare_parts_sub_product_id_sub = "";
$db_spare_parts_sub_product_id_main = "";
$db_spare_parts_sub_product_number_product = "";
$db_spare_parts_sub_product_name_product = "";
$db_spare_parts_sub_product_detail_product = "";
$db_spare_parts_sub_product_image = "";
try {
    $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub_product` where `id` = :_id");
    $stmt->execute(["_id" => $_GET["id"]]);
    foreach ($stmt->fetchAll() as $row) {
        $db_spare_parts_sub_product_id = $row["id"];
        $db_spare_parts_sub_product_id_sub = $row["id_sub"];
        $db_spare_parts_sub_product_id_main = $row["id_main"];
        $db_spare_parts_sub_product_number_product = $row["number_product"];
        $db_spare_parts_sub_product_name_product = $row["name_product"];
        $db_spare_parts_sub_product_detail_product = $row["detail_product"];
        $db_spare_parts_sub_product_image = $row["image"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
if ($db_spare_parts_sub_product_id === "") {
    header("Location: spare_parts.php");
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
                        <li class="breadcrumb-item underline text-blue-500" aria-current="page"><a href="spare_parts_sub_edit.php?id_sub=<?= $db_spare_parts_sub_product_id_sub ?>&p=m#brand_all">สินค้า</a></li>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            แก้ไขข้อมูลสินค้า
                        </li>
                    </ol>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2">
                    <b id="detail2" class="text-2xl">
                        <?php
                        $db_name_spare_parts = "";
                        $db_name_spare_parts_sub = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `spare_parts` WHERE `id`=:__id");
                            $stmt->execute(["__id" => $db_spare_parts_sub_product_id_main]);
                            $result = $stmt->fetch();
                            $db_name_spare_parts = $result["name"];
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `spare_parts_sub` WHERE `id`=:__id");
                            $stmt->execute(["__id" => $db_spare_parts_sub_product_id_sub]);
                            $result = $stmt->fetch();
                            $db_name_spare_parts_sub = $result["name"];
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>

                        - แก้ไขสินค้า : <span class="text-orange-500"><?= $db_spare_parts_sub_product_name_product ?></span> ของ ( อะไหล่ : <span class="text-orange-500"><?= $db_name_spare_parts ?></span> / Brand : <span class="text-orange-500"><?= $db_name_spare_parts_sub ?></span> )
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="sys_spare_parts_sub_product/edit_spare_parts_sub_product.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <input type="text" name="id" hidden value="<?= $db_spare_parts_sub_product_id ?>">

                                <div class="col-12 col-md-6">
                                    <label for="">
                                        หมายเลขสินค้า :
                                    </label>
                                    <input class="form-control" type="text" name="number_product" id="number_product" value="<?= $db_spare_parts_sub_product_number_product ?>" required>
                                </div>
                                <div class="col-12 my-2"></div>
                                <div class="col-12 col-md-6">
                                    <label for="">
                                        ชื่อสินค้า :
                                    </label>
                                    <input class="form-control" type="text" name="name_product" id="name_product" value="<?= $db_spare_parts_sub_product_name_product ?>" required>
                                </div>
                                <div class="col-12 my-2"></div>
                                <div class="col-12 col-md-6">
                                    <label for="">
                                        รายละเอียด (ขนาด) :
                                    </label>
                                    <textarea class="form-control" name="detail_product" id="detail_product" required><?= $db_spare_parts_sub_product_detail_product ?></textarea>
                                </div>
                                <div class="col-12 my-2"></div>
                                <div class="col-12 col-md-6">
                                    <div class="my-3">
                                        <img class="w-[150px] border-[1px] border-zinc-300" src="images/spare_parts/<?= $db_spare_parts_sub_product_image ?>" alt="">
                                    </div>
                                    <label for="">
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