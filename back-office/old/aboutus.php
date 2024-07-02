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
                        <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับเรา</li>
                    </ol>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2">
                    <b class="text-2xl">
                        - เพิ่มรูปภาพ : แสดงที่หน้าแรก
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $db_aboutus_image_home = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `aboutus_image_home`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $db_aboutus_image_home = $row["img"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <form action="sys_aboutus/aboutus_image_home.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <?php
                                    if ($db_aboutus_image_home !== "") {
                                    ?>
                                        <div class="mb-3 w-[300px]">
                                            <img class="w-full border-[1px] border-zinc-300 cursor-pointer" src="<?= "images/aboutus/" . $db_aboutus_image_home ?>" alt="aboutus" billie-gallery="aboutus">
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="mb-3 text-zinc-400">
                                            ยังไม่มีรูปภาพ
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <label for="aboutus_image">
                                        รูปภาพ :
                                    </label>
                                    <input class="form-control" type="file" name="aboutus_image" id="aboutus_image" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        อัพเดท
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2">
                    <b class="text-2xl">
                        - เพิ่มรูปภาพ : แสดงที่หน้าเกี่ยวกับเรา
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $db_aboutus_image = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `aboutus_image`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $db_aboutus_image = $row["img"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <form action="sys_aboutus/aboutus_image.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <?php
                                    if ($db_aboutus_image !== "") {
                                    ?>
                                        <div class="mb-3 w-[300px]">
                                            <img class="w-full border-[1px] border-zinc-300 cursor-pointer" src="<?= "images/aboutus/" . $db_aboutus_image ?>" alt="aboutus" billie-gallery="aboutus">
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="mb-3 text-zinc-400">
                                            ยังไม่มีรูปภาพ
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <label for="aboutus_image">
                                        รูปภาพ :
                                    </label>
                                    <input class="form-control" type="file" name="aboutus_image" id="aboutus_image" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        อัพเดท
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2">
                    <b class="text-2xl">
                        - เพิ่มข้อความสั้น : เกี่ยวกับเรา
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $db_aboutus_tell_something = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `aboutus_tell_something`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $db_aboutus_tell_something = $row["msg"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <form action="sys_aboutus/add_aboutus_tell_something.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="aboutus_tell_something">
                                        ข้อความ :
                                    </label>
                                    <input class="form-control" type="text" name="aboutus_tell_something" id="aboutus_tell_something" value="<?= $db_aboutus_tell_something ?>" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        อัพเดท
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="mb-2" >
                    <b id="detail1" class="text-2xl">
                        - ข้อความเกี่ยวกับเราแบบสั้น : แสดงที่หน้าแรก
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $db_aboutus_home_detail = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `aboutus_home`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $db_aboutus_home_detail = $row["detail"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <form action="sys_aboutus/add_for_home.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <label for="aboutus_home_detail">
                                        รายละเอียด :
                                    </label>
                                    <textarea id="summernote1" class="form-control d-none" name="aboutus_home_detail" rows="8" required><?= $db_aboutus_home_detail ?></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        อัพเดท
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


            <div class="mb-5">
                <div class="mb-2">
                    <b id="detail2" class="text-2xl">
                        - ข้อความเกี่ยวกับเราแบบเต็ม : แสดงที่หน้าเกี่ยวกับเรา
                    </b>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $db_aboutus_detail = "";
                        try {
                            $stmt = $db->conn->prepare("SELECT * FROM `aboutus`");
                            $stmt->execute();
                            foreach ($stmt->fetchAll() as $row) {
                                $db_aboutus_detail = $row["detail"];
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                        <form action="sys_aboutus/add_detail.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <label for="aboutus_home_detail">
                                        รายละเอียด :
                                    </label>
                                    <textarea id="summernote2" class="form-control d-none" name="aboutus_detail" rows="8" required><?= $db_aboutus_detail ?></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        อัพเดท
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
        $('#summernote2').summernote({
            tabsize: 2,
            height: 300,
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