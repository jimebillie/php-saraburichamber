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
    header("Location: service.php");
    exit;
}

$db_service_name="";
$db_service_detail="";
$db_service_image="";
$db_service_id="";
try {
    $stmt = $db->conn->prepare("SELECT * FROM `service` where `id` = :_id");
    $stmt->execute(["_id"=>$_GET["id"]]);
    foreach ($stmt->fetchAll() as $row) {
        $db_service_name = $row["service_name"];
        $db_service_detail = $row["service_detail"];
        $db_service_image = $row["service_image"];
        $db_service_id = $row["id"];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
if($db_service_id === ""){
    header("Location: service.php");
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
                        <li class="breadcrumb-item underline text-blue-600" aria-current="page"><a href="service.php#service_all">บริการ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">แก้ไขบริการ</li>
                    </ol>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2">
                    <b id="detail2" class="text-2xl">
                        - แก้ไขบริการ
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="sys_service/edit_service.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <?php
                                $databack_name = '';
                                $databack_detail = '';
                                if (isset($_SESSION["data_back"])) {
                                    $databack_name = $_SESSION['data_back']['name'];
                                    $databack_detail = $_SESSION['data_back']['detail'];
                                };
                                unset($_SESSION["data_back"]);
                                ?>
                                <input type="text" name="id" hidden value="<?=$db_service_id?>">
                                <div class="col-12 col-md-6">
                                    <label for="service_name">
                                        ชื่อบริการ :
                                    </label>
                                    <input class="form-control" type="text" name="service_name" id="service_name" value="<?=$db_service_name?>" required>
                                </div>
                                <div class="col-12 my-2"></div>
                                <div class="col-12 col-md-6">
                                    <div class="my-3">
                                        <img class="w-[150px] border-[1px] border-zinc-300" src="images/service/<?=$db_service_image?>" alt="">
                                    </div>
                                    <label for="service_image">
                                        รูปภาพ :
                                    </label>
                                    <input class="form-control" type="file" name="service_image" id="service_image">
                                </div>
                                <div class="col-12 my-2"></div>
                                <div class="col-12">
                                    <label for="service_detail">
                                        รายละเอียด :
                                    </label>
                                    <textarea id="summernote1" class="form-control d-none" name="service_detail" rows="8" required><?=$db_service_detail?></textarea>
                                </div>
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
    <script>
        $('#summernote1').summernote({
            tabsize: 2,
            height: 200,
        });
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