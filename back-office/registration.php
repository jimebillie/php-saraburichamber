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
                        <li class="breadcrumb-item active" aria-current="page">
                            สมัครสมาชิก
                        </li>
                    </ol>
                </div>
            </div>
            <?php
            $memberNew = CheckHaveRowDB::slectFrom("form_registration", 0, "approve_status");
            $member = CheckHaveRowDB::slectFrom("form_registration", 1, "approve_status");
            ?>
            <a class="underline" href="../th/admin-register-ordinary.php" target="_blank">+ บุลคลธรรมดา</a>
            <a class="underline ml-3" href="../th/admin-register-juristic.php" target="_blank">+ นิติบุคคล</a>
            <div class="card mt-3">
                <div class="card-header text-2xl">
                    สมาชิกใหม่ ( รออนุมัติ : <span class="text-bold text-orange-500"><?= $memberNew['rows'] ?></span>)
                </div>
                <div class="card-body h-[200px] overflow-auto">
                    <table class="table table-striped table-bordered w-[100%]">
                        <thead class="table-info text-nowrap">
                            <tr>
                                <th>ในนาม</th>
                                <th>ชื่อ - นามสกุล</th>
                                <th>ชื่อสถานประกอบการ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-nowrap">
                            <?php
                            foreach ($memberNew['data'] as $k => $v) {
                            ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $v['type'] === "1"
                                            ?
                                            "<span class='rounded-pill bg-orange-300 px-2 py-1'>บุคคลธรรมดา</span>"
                                            :
                                            "<span class='rounded-pill bg-blue-700 text-white px-2 py-1'>นิติบุคคล</span>"
                                        ?>
                                    </td>
                                    <td>
                                        <?= $v["title_name"] . " " . $v['full_name'] ?>
                                    </td>
                                    <td>
                                        <?= $v['name_establishment'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning"  target="_blank" href="<?= $v['type'] === '1' ? './print-ordinary.php?id=' . $v['id'] : './print-juristic.php?id=' . $v['id'] ?>">
                                            พิมพ์
                                        </a>
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit_modal_<?= $v['id'] ?>">
                                            เพิ่มข้อมูล
                                        </button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="edit_modal_<?= $v['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                <form action="sys_member/approve_edit.php" method="post" enctype="multipart/form-data">

                                                    <input type="text" name="id" value="<?= $v['id'] ?>" required hidden>

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 text-wrap" id="exampleModalLabel">
                                                                เพิ่มข้อมูลของสถานประกอบการ : <?= $v['name_establishment'] ?> (ในนาม :
                                                                <?php
                                                                echo $v['type'] === "1"
                                                                    ?
                                                                    "<span class='text-sm rounded-pill bg-orange-300 px-2 py-1'>บุคคลธรรมดา</span>"
                                                                    :
                                                                    "<span class='text-sm rounded-pill bg-blue-700 text-white px-2 py-1'>นิติบุคคล</span>"
                                                                ?> )
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="">คำนำหน้าชื่อ : </label>
                                                            <input class="form-control mb-2" type="text" name="title_name" value="<?= $v['title_name'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อ - นามสกุล : </label>
                                                            <input class="form-control mb-2" type="text" name="full_name" value="<?= $v['full_name'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">วัน/เดือน/ปีเกิด : </label>
                                                            <input class="form-control mb-2" type="text" name="birthday" value="<?= $v['birthday'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เลขที่บัตรประชาชน : </label>
                                                            <input class="form-control mb-2" type="text" name="id_card" value="<?= $v['id_card'] ?>">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">ไฟล์บัตรประชาชน : </label>
                                                                    <?php
                                                                    if ($v['id_card_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['id_card_file'] ?>" download>
                                                                            <?= $v['id_card_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="id_card_file" id="">
                                                                    </div>
                                                                    <div class="my-2"></div>
                                                                    <label for="">ไฟล์ทะเบียนบ้าน : </label>
                                                                    <?php
                                                                    if ($v['number_house_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['number_house_file'] ?>" download>
                                                                            <?= $v['number_house_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="number_house_file" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อสถานประกอบการ : </label>
                                                            <input class="form-control mb-2" type="text" name="name_establishment" value="<?= $v['name_establishment'] ?>">

                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">เลขที่นิติบุคคล : </label>
                                                                    <?php
                                                                    if ($v['type'] === "2") {
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="number_legal_entity" value="<?= $v['number_legal_entity'] ?>">
                                                                    <?php
                                                                    } else {
                                                                        echo "-";
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="number_legal_entity" value="NULL" hidden>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <label for="">วันที่จดทะเบียนจัดตั้ง : </label>
                                                                    <?php
                                                                    if ($v['type'] === "2") {
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="establishment_date" value="<?= $v['establishment_date'] ?>">
                                                                    <?php
                                                                    } else {
                                                                        echo "-";
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="establishment_date" value="NULL" hidden>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <label for="">ไฟล์ทะเบียนพาณิชย์ : </label>
                                                                            <?php
                                                                            if ($v['type'] === "2") {
                                                                                if ($v['commercial_registration_file'] !== NULL) {
                                                                            ?>
                                                                                    <a class="underline" href="images/member/<?= $v['commercial_registration_file'] ?>" download>
                                                                                        <?= $v['commercial_registration_file'] ?>
                                                                                    </a>
                                                                                <?php
                                                                                } else {
                                                                                    echo "ยังไม่ได้อัพโหลด";
                                                                                }
                                                                                ?>
                                                                                <div>
                                                                                    อัพโหลดใหม่ : <input type="file" name="commercial_registration_file" id="">
                                                                                </div>
                                                                            <?php
                                                                            } else {
                                                                                echo "-";
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>


                                                            <div class="my-2"></div>
                                                            <label for="">เบอร์โทรศัพท์สำนักงาน : </label>
                                                            <input class="form-control mb-2" type="text" name="office_phone" value="<?= $v['office_phone'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เบอร์โทรศัพท์มือถือ : </label>
                                                            <input class="form-control mb-2" type="text" name="phone" value="<?= $v['phone'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">อีเมล : </label>
                                                            <input class="form-control mb-2" type="text" name="email" value="<?= $v['email'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อเว็บไซต์ : </label>
                                                            <input class="form-control mb-2" type="text" name="website" value="<?= $v['website'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">วันที่ ชำระเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="date_pay" value="<?= $v['date_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เวลา ชำระเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="time_pay" value="<?= $v['time_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">จำนวนเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="total_pay" value="<?= $v['total_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">หลักฐานการชำระเงิน : </label>
                                                                    <?php
                                                                    if ($v['proof_of_payment_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['proof_of_payment_file'] ?>" download>
                                                                            <?= $v['proof_of_payment_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="proof_of_payment_file" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">Logo : </label>
                                                                    <?php
                                                                    if ($v['logo'] !== NULL) {
                                                                    ?>
                                                                        <img class="w-[200px] h-[200px] object-center object-cover" src="images/member/<?= $v['logo'] ?>" />

                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="logo" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">สไลด์ Banner : </label>
                                                                    <?php
                                                                    if ($v['slide_banner'] !== NULL && $v['slide_banner'] !== "") {

                                                                        foreach (explode(",", $v['slide_banner']) as $k_slide_banner => $v_slide_banner) {

                                                                    ?>
                                                                            <div class="flex items-center">
                                                                                <img class="w-[200px] h-[50px] object-center object-cover mb-2 border-2 border-gray-300" src="images/member/<?= $v_slide_banner ?>" />
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ (*เพิ่มใด้หลายไฟล์ในครั้งเดียว) : <input type="file" name="slide_banner[]" multiple>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">รูปภาพหลัก : </label>
                                                                    <?php
                                                                    if ($v['main_img'] !== NULL) {
                                                                    ?>
                                                                        <img class="w-[200px] h-[200px] object-center object-cover" src="images/member/<?= $v['main_img'] ?>" />

                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="main_img" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body overflow-auto">
                                                                    <label for="">รายละเอียดที่ 1 : </label>
                                                                    <textarea class="summernote" name="desc_1" id=""><?= $v['desc_1'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body overflow-auto">
                                                                    <label for="">รายละเอียดที่ 2 : </label>
                                                                    <textarea class="summernote" name="desc_2" id=""><?= $v['desc_2'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- \.Modal Edit-->


                                        <button class="btn btn-success" onclick="confirm('ต้องการยืนยันใช่ไหม ?') ? window.location.href='sys_member/approve_force.php?id=<?= $v['id'] ?>' : false">
                                            ยืนยัน
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

            <!-- Approved -->
            <div class="card mt-3">
                <div class="card-header text-2xl">
                    อนุมัติเรียบร้อยแล้ว : <span class="text-bold text-orange-500"><?= $member['rows'] ?></span>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-striped table-bordered w-[100%]">
                        <thead class="table-success text-nowrap">
                            <tr>
                                <th>ในนาม</th>
                                <th>ชื่อ - นามสกุล</th>
                                <th>ชื่อสถานประกอบการ</th>
                                <th>ถูกจัดแสดงหน้าแรก (<span class="text-orange-500">
                                        <?php
                                        $stmt = $db->conn->prepare("SELECT COUNT(id) as _count FROM `form_registration` WHERE `display_home`='show'");
                                        $stmt->execute();
                                        foreach ($stmt->fetchAll() as $k_count => $v_count) {
                                            echo $v_count['_count'];
                                        }
                                        ?>
                                    </span>)</th>
                                <th>
                                    ถูกแสดงที่หน้าเครือข่ายสมาชิก (
                                    <span class="text-orange-500">
                                        <?php
                                        echo CheckHaveRowDB::slectFrom("register_show_list")["rows"]
                                        ?>
                                    </span>)
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-nowrap">
                            <?php
                            foreach (array_reverse($member['data']) as $k => $v) {
                            ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $v['type'] === "1"
                                            ?
                                            "<span class='rounded-pill bg-orange-300 px-2 py-1'>บุคคลธรรมดา</span>"
                                            :
                                            "<span class='rounded-pill bg-blue-700 text-white px-2 py-1'>นิติบุคคล </span>"
                                        ?>
                                    </td>
                                    <td>
                                        <?= $v['title_name'] . " " . $v['full_name'] ?>
                                    </td>
                                    <td>
                                        <?= $v['name_establishment'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $v['display_home'] === NULL
                                            ?
                                            "<span class='rounded-pill bg-gray-300 px-2 py-1'>no</span>"
                                            :
                                            "<span class='rounded-pill bg-green-700 text-white px-2 py-1'>yes</span>"
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo CheckHaveRowDB::slectFrom("register_show_list", $v['id'], "id_main")["rows"] === 0
                                            ?
                                            "<span class='rounded-pill bg-gray-300 px-2 py-1'>no</span>"
                                            :
                                            "<span class='rounded-pill bg-green-700 text-white px-2 py-1'>yes</span>"
                                        ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" target="_blank" href="<?= $v['type'] === '1' ? './print-ordinary.php?id=' . $v['id'] : './print-juristic.php?id=' . $v['id'] ?>">
                                            พิมพ์
                                        </a>
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit_modal_<?= $v['id'] ?>">
                                            เพิ่มข้อมูล
                                        </button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="edit_modal_<?= $v['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                <form action="sys_member/approve_edit.php" method="post" enctype="multipart/form-data">

                                                    <input type="text" name="id" value="<?= $v['id'] ?>" required hidden>

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 text-wrap" id="exampleModalLabel">
                                                                เพิ่มข้อมูลของสถานประกอบการ : <?= $v['name_establishment'] ?> (ในนาม :
                                                                <?php
                                                                echo $v['type'] === "1"
                                                                    ?
                                                                    "<span class='text-sm rounded-pill bg-orange-300 px-2 py-1'>บุคคลธรรมดา</span>"
                                                                    :
                                                                    "<span class='text-sm rounded-pill bg-blue-700 text-white px-2 py-1'>นิติบุคคล</span>"
                                                                ?> )
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="">คำนำหน้าชื่อ : </label>
                                                            <input class="form-control mb-2" type="text" name="title_name" value="<?= $v['title_name'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อ - นามสกุล : </label>
                                                            <input class="form-control mb-2" type="text" name="full_name" value="<?= $v['full_name'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">วัน/เดือน/ปีเกิด : </label>
                                                            <input class="form-control mb-2" type="text" name="birthday" value="<?= $v['birthday'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เลขที่บัตรประชาชน : </label>
                                                            <input class="form-control mb-2" type="text" name="id_card" value="<?= $v['id_card'] ?>">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">ไฟล์บัตรประชาชน : </label>
                                                                    <?php
                                                                    if ($v['id_card_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['id_card_file'] ?>" download>
                                                                            <?= $v['id_card_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="id_card_file" id="">
                                                                    </div>
                                                                    <div class="my-2"></div>
                                                                    <label for="">ไฟล์ทะเบียนบ้าน : </label>
                                                                    <?php
                                                                    if ($v['number_house_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['number_house_file'] ?>" download>
                                                                            <?= $v['number_house_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="number_house_file" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อสถานประกอบการ : </label>
                                                            <input class="form-control mb-2" type="text" name="name_establishment" value="<?= $v['name_establishment'] ?>">

                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">เลขที่นิติบุคคล : </label>
                                                                    <?php
                                                                    if ($v['type'] === "2") {
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="number_legal_entity" value="<?= $v['number_legal_entity'] ?>">
                                                                    <?php
                                                                    } else {
                                                                        echo "-";
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="number_legal_entity" value="NULL" hidden>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <label for="">วันที่จดทะเบียนจัดตั้ง : </label>
                                                                    <?php
                                                                    if ($v['type'] === "2") {
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="establishment_date" value="<?= $v['establishment_date'] ?>">
                                                                    <?php
                                                                    } else {
                                                                        echo "-";
                                                                    ?>
                                                                        <input class="form-control mb-2" type="text" name="establishment_date" value="NULL" hidden>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <label for="">ไฟล์ทะเบียนพาณิชย์ : </label>
                                                                            <?php
                                                                            if ($v['type'] === "2") {
                                                                                if ($v['commercial_registration_file'] !== NULL) {
                                                                            ?>
                                                                                    <a class="underline" href="images/member/<?= $v['commercial_registration_file'] ?>" download>
                                                                                        <?= $v['commercial_registration_file'] ?>
                                                                                    </a>
                                                                                <?php
                                                                                } else {
                                                                                    echo "ยังไม่ได้อัพโหลด";
                                                                                }
                                                                                ?>
                                                                                <div>
                                                                                    อัพโหลดใหม่ : <input type="file" name="commercial_registration_file" id="">
                                                                                </div>
                                                                            <?php
                                                                            } else {
                                                                                echo "-";
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>


                                                            <div class="my-2"></div>
                                                            <label for="">เบอร์โทรศัพท์สำนักงาน : </label>
                                                            <input class="form-control mb-2" type="text" name="office_phone" value="<?= $v['office_phone'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เบอร์โทรศัพท์มือถือ : </label>
                                                            <input class="form-control mb-2" type="text" name="phone" value="<?= $v['phone'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">อีเมล : </label>
                                                            <input class="form-control mb-2" type="text" name="email" value="<?= $v['email'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">ชื่อเว็บไซต์ : </label>
                                                            <input class="form-control mb-2" type="text" name="website" value="<?= $v['website'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">วันที่ ชำระเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="date_pay" value="<?= $v['date_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">เวลา ชำระเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="time_pay" value="<?= $v['time_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <label for="">จำนวนเงิน : </label>
                                                            <input class="form-control mb-2" type="text" name="total_pay" value="<?= $v['total_pay'] ?>">
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">หลักฐานการชำระเงิน : </label>
                                                                    <?php
                                                                    if ($v['proof_of_payment_file'] !== NULL) {
                                                                    ?>
                                                                        <a class="underline" href="images/member/<?= $v['proof_of_payment_file'] ?>" download>
                                                                            <?= $v['proof_of_payment_file'] ?>
                                                                        </a>
                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="proof_of_payment_file" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">Logo : </label>
                                                                    <?php
                                                                    if ($v['logo'] !== NULL) {
                                                                    ?>
                                                                        <img class="w-[200px] h-[200px] object-center object-cover" src="images/member/<?= $v['logo'] ?>" />

                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="logo" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">สไลด์ Banner : </label>
                                                                    <?php
                                                                    if ($v['slide_banner'] !== NULL && $v['slide_banner'] !== "") {

                                                                        foreach (explode(",", $v['slide_banner']) as $k_slide_banner => $v_slide_banner) {

                                                                    ?>
                                                                            <div id='img-slide-<?= $v['id'] ?>-<?= $k_slide_banner ?>' class="flex items-center">
                                                                                <img class="w-[200px] h-[50px] object-center object-cover mb-2 border-2 border-gray-300" src="images/member/<?= $v_slide_banner ?>" />
                                                                                <div class="underline ml-2 cursor-pointer" onclick="confirm('ต้องการลบจริงหรือไม่ ?') ? del_slide(`img-slide-<?= $v['id'] ?>-<?= $k_slide_banner ?>`, `<?= $k_slide_banner ?>`, `<?= $v['id'] ?>`) : false ">ลบ</div>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ (*เพิ่มใด้หลายไฟล์ในครั้งเดียว) : <input type="file" name="slide_banner[]" multiple>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <label for="">รูปภาพหลัก : </label>
                                                                    <?php
                                                                    if ($v['main_img'] !== NULL) {
                                                                    ?>
                                                                        <img class="w-[200px] h-[200px] object-center object-cover" src="images/member/<?= $v['main_img'] ?>" />

                                                                    <?php
                                                                    } else {
                                                                        echo "ยังไม่ได้อัพโหลด";
                                                                    }
                                                                    ?>
                                                                    <div class="my-2"></div>
                                                                    <div>
                                                                        อัพโหลดใหม่ : <input type="file" name="main_img" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body overflow-auto">
                                                                    <label for="">รายละเอียดที่ 1 : </label>
                                                                    <textarea class="summernote" name="desc_1" id=""><?= $v['desc_1'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <div class="card">
                                                                <div class="card-body overflow-auto">
                                                                    <label for="">รายละเอียดที่ 2 : </label>
                                                                    <textarea class="summernote" name="desc_2" id=""><?= $v['desc_2'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="my-2"></div>
                                                            <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- \.Modal Edit-->

                                        <div class="btn btn-danger" onclick="confirm('ต้องการลบหรือไม่ ?') ? window.location.href='./sys_member/del_member.php?id=<?= $v['id'] ?>' : false">
                                            ลบ
                                        </div>
                                        <?php
                                        if ($v['display_home'] === NULL) {
                                        ?>
                                            <?php
                                            $stmt = $db->conn->prepare("SELECT COUNT(id) as _count FROM `form_registration` WHERE `display_home`='show'");
                                            $stmt->execute();
                                            foreach ($stmt->fetchAll() as $k_count => $v_count) {
                                                if ($v_count['_count'] < 20) {
                                            ?>
                                                    <div class="btn btn-success" onclick="confirm('ต้องการแสดงในหน้าแรกหรือไม่ ?') ? window.location.href='./sys_member/show_member.php?id=<?= $v['id'] ?>' : false">
                                                        แสดงหน้าแรก
                                                    </div>
                                            <?php
                                                }
                                            }
                                        } else {
                                            ?>
                                            <div class="btn btn-secondary" onclick="confirm('ต้องการยกเลิกแสดงในหน้าแรกหรือไม่ ?') ? window.location.href='./sys_member/hidden_member.php?id=<?= $v['id'] ?>' : false">
                                                ยกเลิกแสดงหน้าแรก
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (CheckHaveRowDB::slectFrom("register_show_list", $v['id'], "id_main")["rows"] === 0) {
                                        ?>
                                            <div class="btn bg-indigo-400 hover:bg-indigo-500 text-white" onclick="confirm('ต้องการแสดงหน้าเครือข่ายสมาชิกหรือไม่ ?') ? window.location.href='./sys_member/show_memberpage.php?id=<?= $v['id'] ?>' : false">
                                                แสดงหน้าเครือข่ายสมาชิก
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="btn btn-secondary" onclick="confirm('ต้องการยกเลิกแสดงหน้าเครือข่ายสมาชิกหรือไม่ ?') ? window.location.href='./sys_member/hidden_memberpage.php?id=<?= $v['id'] ?>' : false">
                                                ยกเลิกแสดงหน้าเครือข่ายสมาชิก
                                            </div>
                                        <?php
                                        }
                                        ?>

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
        async function del_slide(id_html_img, id_img, id) {
            const api = await fetch(`./sys_member/del_slide.php?id=${id}&id_img=${id_img}`, {
                method: "GET"
            });
            const resp = await api.json()
            if (resp.msg === "pass") {
                document.getElementById(id_html_img).remove();
            }
        }
        async
    </script>
</body>

</html>