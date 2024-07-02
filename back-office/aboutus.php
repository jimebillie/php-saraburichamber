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
                        <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับเรา</li>
                    </ol>
                </div>
            </div>

            <div>

                <!-- P1 -->
                <div class="card mb-[50px]">
                    <div class="card-header text-2xl">
                        - เกี่ยวกับเรา
                    </div>
                    <div class="card-body">
                        <form action="sys_aboutus/add_panel1.php" method="post" enctype="multipart/form-data">
                            <?php
                            $aboutus_panel1 = CheckHaveRowDB::slectFrom("aboutus_panel1");
                            $data_aboutus_panel1 = [
                                "th" => "",
                                "en" => "",
                            ];
                            if ($aboutus_panel1['rows'] > 0) {
                                $data_aboutus_panel1['th'] = $aboutus_panel1['data'][0]['th'];
                                $data_aboutus_panel1['en'] = $aboutus_panel1['data'][0]['en'];
                            }
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาไทย
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__th" id="" required><?= $data_aboutus_panel1['th'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาอังกฤษ
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__en" id="" required><?= $data_aboutus_panel1['en'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P1 -->



                <!-- P2 -->
                <div id="panel2" class="card mb-[50px]">
                    <div class="card-header text-2xl">
                        - ประวัติหอการค้าจังหวัดสระบุรี
                    </div>
                    <div class="card-body">
                        <form action="sys_aboutus/add_panel2.php" method="post" enctype="multipart/form-data">
                            <?php
                            $aboutus_panel2 = CheckHaveRowDB::slectFrom("aboutus_panel2");
                            $data_aboutus_panel2 = [
                                "th" => "",
                                "en" => "",
                            ];
                            if ($aboutus_panel2['rows'] > 0) {
                                $data_aboutus_panel2['th'] = $aboutus_panel2['data'][0]['th'];
                                $data_aboutus_panel2['en'] = $aboutus_panel2['data'][0]['en'];
                            }
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาไทย
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__th" id="" required><?= $data_aboutus_panel2['th'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาอังกฤษ
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__en" id="" required><?= $data_aboutus_panel2['en'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P2 -->


                <!-- P3 -->
                <div id="panel3" class="card mb-[50px]">
                    <div class="card-header text-2xl">
                        - หน้าที่และภารกิจของหอการค้าจังหวัดสระบุรี
                    </div>
                    <div class="card-body">
                        <form action="sys_aboutus/add_panel3.php" method="post" enctype="multipart/form-data">
                            <?php
                            $aboutus_panel3 = CheckHaveRowDB::slectFrom("aboutus_panel3");
                            $data_aboutus_panel3 = [
                                "th" => "",
                                "en" => "",
                            ];
                            if ($aboutus_panel3['rows'] > 0) {
                                $data_aboutus_panel3['th'] = $aboutus_panel3['data'][0]['th'];
                                $data_aboutus_panel3['en'] = $aboutus_panel3['data'][0]['en'];
                            }
                            ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาไทย
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__th" id="" required><?= $data_aboutus_panel3['th'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            แสดงหน้าภาษาอังกฤษ
                                        </div>
                                        <div class="card-body">
                                            <textarea class="summernote" name="__en" id="" required><?= $data_aboutus_panel3['en'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success w-full">
                                        บันทึก
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- \.P3 -->

                <!-- P4 -->
                <div id="panel4" class="card mb-[50px]">
                    <div class="card-header text-2xl">
                        - โครงสร้างองค์กร
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-striped table-bordered w-[100%]">
                            <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#add_people">
                                + เพิ่มข้อมูล
                            </button>

                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        ประธานกิตติมศักดิ์
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="flex">
                                <?php
                                $abs1 = CheckHaveRowDB::slectFrom("aboutus_structure_1")['rows'];
                                $data = CheckHaveRowDB::slectFrom("aboutus_structure_1")['data'];

                                // Loop backwards from the highest index to 0
                                for ($i = $abs1 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <div>
                                                <?= $i + 1 ?>
                                            </div>
                                            <textarea id="data1ToModal_<?= $i ?>" hidden>
                    <?= json_encode([
                                        "id" => $data[$i]['id'],
                                        "table" => "aboutus_structure_1",
                                        "name_th" => $data[$i]['name_th'],
                                        "name_en" => $data[$i]['name_en'],
                                        "cpn_th" => $data[$i]['cpn_th'],
                                        "cpn_en" => $data[$i]['cpn_en'],
                                        "img" => $data[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
                </textarea>
                                            <div>
                                                <?= $data[$i]['name_th'] ?>
                                            </div>
                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data[$i]['id'] ?>&table=aboutus_structure_1' : false">
                                                ลบ
                                            </button>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data1ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        ประธานกรรมการ
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="flex">
                                <?php
                                $abs2 = CheckHaveRowDB::slectFrom("aboutus_structure_2")['rows'];
                                $data2 = CheckHaveRowDB::slectFrom("aboutus_structure_2")['data'];
                                for ($i = $abs2 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <div>
                                                <?= $i + 1 ?>
                                            </div>
                                            <textarea id="data2ToModal_<?= $i ?>" hidden>
                    <?= json_encode([
                                        "id" => $data2[$i]['id'],
                                        "table" => "aboutus_structure_2",
                                        "name_th" => $data2[$i]['name_th'],
                                        "name_en" => $data2[$i]['name_en'],
                                        "cpn_th" => $data2[$i]['cpn_th'],
                                        "cpn_en" => $data2[$i]['cpn_en'],
                                        "img" => $data2[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
                </textarea>
                                            <div>
                                                <?= $data2[$i]['name_th'] ?>
                                            </div>
                                            <div>
                                                <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data2[$i]['id'] ?>&table=aboutus_structure_2' : false">
                                                    ลบ
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data2ToModal_<?= $i; ?>')">
                                                    แก้ไข
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        ประธาน YEC จังหวัดสระบุรี
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $abs3 = CheckHaveRowDB::slectFrom("aboutus_structure_3")['rows'];
                                $data3 = CheckHaveRowDB::slectFrom("aboutus_structure_3")['data'];
                                for ($i = $abs3 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <?= $i + 1 ?>

                                            <textarea id="data3ToModal_<?= $i ?>" hidden>
                <?= json_encode([
                                        "id" => $data3[$i]['id'],
                                        "table" => "aboutus_structure_3",
                                        "name_th" => $data3[$i]['name_th'],
                                        "name_en" => $data3[$i]['name_en'],
                                        "cpn_th" => $data3[$i]['cpn_th'],
                                        "cpn_en" => $data3[$i]['cpn_en'],
                                        "img" => $data3[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
            </textarea>

                                            <div>
                                                <?= $data3[$i]['name_th'] ?>
                                            </div>



                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data3[$i]['id'] ?>&table=aboutus_structure_3' : false">
                                                ลบ
                                            </button>
                                            <!-- edit open --->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data3ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                            <!-- \.edit open --->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        รองประธานกรรมการ
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="flex">
                                <?php
                                $abs4 = CheckHaveRowDB::slectFrom("aboutus_structure_4")['rows'];
                                $data4 = CheckHaveRowDB::slectFrom("aboutus_structure_4")['data'];
                                for ($i = $abs4 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <?= $i + 1 ?>

                                            <textarea id="data4ToModal_<?= $i ?>" hidden>
                <?= json_encode([
                                        "id" => $data4[$i]['id'],
                                        "table" => "aboutus_structure_4",
                                        "name_th" => $data4[$i]['name_th'],
                                        "name_en" => $data4[$i]['name_en'],
                                        "cpn_th" => $data4[$i]['cpn_th'],
                                        "cpn_en" => $data4[$i]['cpn_en'],
                                        "img" => $data4[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
            </textarea>

                                            <div>
                                                <?= $data4[$i]['name_th'] ?>
                                            </div>



                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data4[$i]['id'] ?>&table=aboutus_structure_4' : false">
                                                ลบ
                                            </button>
                                            <!-- edit open --->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data4ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                            <!-- \.edit open --->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        กรรมการเลขา
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="flex">
                                <?php
                                $abs5 = CheckHaveRowDB::slectFrom("aboutus_structure_5")['rows'];
                                $data5 = CheckHaveRowDB::slectFrom("aboutus_structure_5")['data'];
                                for ($i = $abs5 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <?= $i + 1 ?>

                                            <textarea id="data5ToModal_<?= $i ?>" hidden>
                <?= json_encode([
                                        "id" => $data5[$i]['id'],
                                        "table" => "aboutus_structure_5",
                                        "name_th" => $data5[$i]['name_th'],
                                        "name_en" => $data5[$i]['name_en'],
                                        "cpn_th" => $data5[$i]['cpn_th'],
                                        "cpn_en" => $data5[$i]['cpn_en'],
                                        "img" => $data5[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
            </textarea>

                                            <div>
                                                <?= $data5[$i]['name_th'] ?>
                                            </div>



                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data5[$i]['id'] ?>&table=aboutus_structure_5' : false">
                                                ลบ
                                            </button>
                                            <!-- edit open --->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data5ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                            <!-- \.edit open --->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        ที่ปรึกษา
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="flex">
                                <?php
                                $abs6 = CheckHaveRowDB::slectFrom("aboutus_structure_6")['rows'];
                                $data6 = CheckHaveRowDB::slectFrom("aboutus_structure_6")['data'];
                                for ($i = $abs6 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <?= $i + 1 ?>

                                            <textarea id="data6ToModal_<?= $i ?>" hidden>
                <?= json_encode([
                                        "id" => $data6[$i]['id'],
                                        "table" => "aboutus_structure_6",
                                        "name_th" => $data6[$i]['name_th'],
                                        "name_en" => $data6[$i]['name_en'],
                                        "cpn_th" => $data6[$i]['cpn_th'],
                                        "cpn_en" => $data6[$i]['cpn_en'],
                                        "img" => $data6[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
            </textarea>

                                            <div>
                                                <?= $data6[$i]['name_th'] ?>
                                            </div>



                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data6[$i]['id'] ?>&table=aboutus_structure_6' : false">
                                                ลบ
                                            </button>
                                            <!-- edit open --->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data6ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                            <!-- \.edit open --->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <thead class="table-primary">
                                <tr>
                                    <th colspan="7">
                                        กรรมการ
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="flex">
                                <?php
                                $abs7 = CheckHaveRowDB::slectFrom("aboutus_structure_7")['rows'];
                                $data7 = CheckHaveRowDB::slectFrom("aboutus_structure_7")['data'];
                                for ($i = $abs7 - 1; $i >= 0; $i--) {
                                ?>
                                    <tr class="w-[300px] flex">
                                        <td class="w-[100%]">
                                            <?= $i + 1 ?>

                                            <textarea id="data7ToModal_<?= $i ?>" hidden>
                <?= json_encode([
                                        "id" => $data7[$i]['id'],
                                        "table" => "aboutus_structure_7",
                                        "name_th" => $data7[$i]['name_th'],
                                        "name_en" => $data7[$i]['name_en'],
                                        "cpn_th" => $data7[$i]['cpn_th'],
                                        "cpn_en" => $data7[$i]['cpn_en'],
                                        "img" => $data7[$i]['img'],
                                    ], JSON_UNESCAPED_UNICODE) ?>
            </textarea>

                                            <div>
                                                <?= $data7[$i]['name_th'] ?>
                                            </div>



                                            <button class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่') ? window.location.href='sys_aboutus/del_aboutus_structure.php?id=<?= $data7[$i]['id'] ?>&table=aboutus_structure_7' : false">
                                                ลบ
                                            </button>
                                            <!-- edit open --->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_modal" onclick="modalEdit('data7ToModal_<?= $i; ?>')">
                                                แก้ไข
                                            </button>
                                            <!-- \.edit open --->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!--\.P4 -->


                <!-- Modal Add-->
                <div class="modal fade" id="add_people" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <form action="sys_aboutus/add_aboutus_structure.php" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        เพิ่มข้อมูลโครงสร้างองค์กร
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- select -->
                                    <div class="mb-3">
                                        <label class="mb-2">เลือกตำแหน่ง : </label>
                                        <select class="form-select" aria-label="Default select example" name="position">
                                            <option value="1">ประธานกิตติมศักดิ์</option>
                                            <?php
                                            if (CheckHaveRowDB::slectFrom("aboutus_structure_2")["rows"] === 0) {
                                            ?>
                                                <option value="2">ประธานกรรมการ</option>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if (CheckHaveRowDB::slectFrom("aboutus_structure_3")["rows"] === 0) {
                                            ?>
                                                <option value="3">ประธาน YEC จังหวัดสระบุรี</option>
                                            <?php
                                            }
                                            ?>
                                            <option value="4">รองประธานกรรมการ</option>
                                            <option value="5">กรรมการเลขา</option>
                                            <option value="6">ที่ปรึกษา</option>
                                            <option value="7">กรรมการ</option>
                                        </select>
                                    </div>
                                    <!-- \.select -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">ชื่อภาษาไทย : </label>
                                        <input class="form-control" type="text" name="name_th" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">ชื่อภาษาอังกฤษ : </label>
                                        <input class="form-control" type="text" name="name_en" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">บริษัทภาษาไทย : </label>
                                        <input class="form-control" type="text" name="cpn_th" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">บริษัทภาษาอังกฤษ : </label>
                                        <input class="form-control" type="text" name="cpn_en" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- file -->
                                    <div class="mb-3">
                                        <label class="mb-2">รูปภาพ : </label>
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
                <!-- \.Modal Add-->


                <!-- Modal Edit-->
                <div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <form action="sys_aboutus/edit_aboutus_structure.php" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        แก้ไขข้อมูลโครงสร้างองค์กร
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="id" hidden required>
                                    <input type="text" name="table" hidden required>
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">แก้ไขชื่อภาษาไทย : </label>
                                        <input class="form-control" type="text" name="name_th" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">ชื่อภาษาอังกฤษ : </label>
                                        <input class="form-control" type="text" name="name_en" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">บริษัทภาษาไทย : </label>
                                        <input class="form-control" type="text" name="cpn_th" required>
                                    </div>
                                    <!-- \.text -->
                                    <!-- text -->
                                    <div class="mb-3">
                                        <label class="mb-2">บริษัทภาษาอังกฤษ : </label>
                                        <input class="form-control" type="text" name="cpn_en" required>
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
                <!-- \.Modal Edit-->

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
            height: 350,
        });
    </script>
    <!-- \.Summernote -->

    <script>
        function modalEdit(data) {
            const dataE = JSON.parse($(`#${data}`).val())
            $(".modal-body > input[name='id']").val(dataE.id)
            $(".modal-body > input[name='table']").val(dataE.table)
            $(".modal-body > div > input[name='name_th']").val(dataE.name_th)
            $(".modal-body > div > input[name='name_en']").val(dataE.name_en)
            $(".modal-body > div > input[name='cpn_th']").val(dataE.name_th)
            $(".modal-body > div > input[name='cpn_en']").val(dataE.name_en)
            $(".modal-body > div > img").attr("src", '')
            $(".modal-body > div > img").attr("src", 'images/aboutus/structure/' + dataE.img)
            $(".modal-body > div > input[name='img']").val("")

        }
    </script>
</body>

</html>