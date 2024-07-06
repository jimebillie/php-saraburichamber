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
                        <li class="breadcrumb-item active" aria-current="page">หน้าแรก - จัดการ Banner</li>
                    </ol>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - เพิ่มรูปภาพ Banner เว็บภาษาไทย
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="sys_home/add_banner_th.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="">เลือกรูปภาพ <span class="text-xs">*( สำหรับคอมพิวเตอร์ )</span> :</label>
                                        <input class="form-control" type="file" name="pc" id="slide" required>
                                    </div>
                                    <div>
                                        <label for="">เลือกรูปภาพ <span class="text-xs">*( สำหรับมือถือ )</span> :</label>
                                        <input class="form-control" type="file" name="mobile" id="slide-mobile" required>
                                    </div>



                                    <div class="mt-3">
                                        <button class="btn btn-success" type="submit">
                                            บันทึก
                                        </button>
                                    </div>
                                </form>

                                <?php
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `home_banner_th` order by id desc");
                                    $stmt->execute();
                                    $stmt_count = $db->conn->prepare("SELECT COUNT(id) as _count FROM `home_banner_th` order by id desc");
                                    $stmt_count->execute();

                                ?>
                                    <?php
                                    foreach ($stmt_count->fetchAll() as $row) {
                                        if ($row["_count"] > 0) {
                                    ?>
                                            <div class="mt-5 text-sm text-zinc-400 text-nowrap">จำนวนทั้งหทด : ( <?= $row["_count"] ?> ) สไลด์</div>
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
                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/home/banner/th/<?= $row["pc"] ?>" alt="slide" billie-gallery="slide-<?= rand(1, 9999) ?>">
                                                    </div>
                                                    <div class="ml-3 w-[50px]">
                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/home/banner/th/<?= $row["mobile"] ?>" alt="slide-mobile" billie-gallery="slide-mobile-<?= rand(1, 1000) ?>">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="underline text-red-700 cursor-pointer" onClick="del_slide(<?= $row['id'] ?>, 'th')">
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
                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - เพิ่มรูปภาพ Banner เว็บภาษาอังกฤษ
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="sys_home/add_banner_en.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="">เลือกรูปภาพ <span class="text-xs">*( สำหรับคอมพิวเตอร์ )</span> :</label>
                                        <input class="form-control" type="file" name="pc" id="slide" required>
                                    </div>
                                    <div>
                                        <label for="">เลือกรูปภาพ <span class="text-xs">*( สำหรับมือถือ )</span> :</label>
                                        <input class="form-control" type="file" name="mobile" id="slide-mobile" required>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-success" type="submit">
                                            บันทึก
                                        </button>
                                    </div>
                                </form>

                                <?php
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `home_banner_en` order by id desc");
                                    $stmt->execute();
                                    $stmt_count = $db->conn->prepare("SELECT COUNT(id) as _count FROM `home_banner_en` order by id desc");
                                    $stmt_count->execute();

                                ?>
                                    <?php
                                    foreach ($stmt_count->fetchAll() as $row) {
                                        if ($row["_count"] > 0) {
                                    ?>
                                            <div class="mt-5 text-sm text-zinc-400 text-nowrap">จำนวนทั้งหทด : ( <?= $row["_count"] ?> ) สไลด์</div>
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
                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/home/banner/en/<?= $row["pc"] ?>" alt="slide" billie-gallery="slide-<?= rand(1, 9999) ?>">
                                                    </div>
                                                    <div class="ml-3 w-[50px]">
                                                        <img class="w-full h-[50px] object-center object-cover border-[1px] border-zinc-500 cursor-pointer" src="images/home/banner/en/<?= $row["mobile"] ?>" alt="slide-mobile" billie-gallery="slide-mobile-<?= rand(1, 1000) ?>">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="underline text-red-700 cursor-pointer" onClick="del_slide(<?= $row['id'] ?>, 'en')">
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


    <script>
        function del_slide(id, lang) {
            if (confirm(
                    "Do you want to delete image ?"
                )) {
                window.location.href = `sys_home/del_banner_${lang}.php?id=` + id
            }
        }
    </script>

</body>

</html>