<?php
session_start();
require("./helper/check_row_db.php");
/**
 * Middleware 
 */
if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
    exit;
}
$data_dashboard = require_once("helper/data_dashboard.php"); //-> Data dashboard
$db = new connect();
require_once __DIR__ . "/database/connect.php";

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
                        <li class="breadcrumb-item active" aria-current="page">หน้าแรก - สิทธิประโยช์ที่จะได้รับ</li>
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
                                <?php
                                $home_benefit_img = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `home_benefit_img`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $home_benefit_img = $row["img"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="./sys_home/add_home_benefit_img.php" method="post" enctype="multipart/form-data">
                                    <?php
                                    if ($home_benefit_img !== "") {
                                    ?>
                                        <div class="w-[200px] h-[200px] mb-3 shadow-md border rounded-lg overflow-hidden ">
                                            <img src="./images/home/home_benefits/<?= $home_benefit_img ?>" class="w-[100%] h-[100%] object-center object-cover">
                                        </div>
                                    <?php
                                    }

                                    ?>
                                    <input class="form-control mb-3" type="file" name="home_benefit_img" required>
                                    <button class="btn btn-success w-full">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>


                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - แสดงบนเว็บภาษาไทย
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="./sys_home/add_home_benefit_th.php" method="post">
                                    <label for="">หัวข้อ <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="topic" required>
                                    <label for="">รายละเอียด <span class="text-xs"></span> :</label>
                                    <textarea class="form-control mb-3" rows="5" name="desc" required></textarea>
                                    <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                </form>
                                <div class="mt-3 w-[100%] overflow-auto">
                                    <?php
                                    $data_th = [];
                                    try {
                                        $data_th = CheckHaveRowDB::slectFrom("home_benefit_th");
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    if ($data_th["rows"] > 0) {
                                    ?>
                                        <table id="table_th" class="table table-striped table-bordered">
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < $data_th['rows']; $i++) {
                                                ?>
                                                    <tr>
                                                        <textarea id="dataEditTh_<?= $i ?>" hidden><?= json_encode([
                                                                                                        "id" => $data_th['data'][$i]['id'], "topic" => $data_th['data'][$i]['topic'], "desc" => $data_th['data'][$i]['desc']
                                                                                                    ], JSON_UNESCAPED_UNICODE) ?></textarea>
                                                        <td><?= $data_th['data'][$i]['topic'] ?></td>
                                                        <td><?= nl2br($data_th['data'][$i]['desc']) ?></td>
                                                        <td>
                                                            <div class="btn btn-danger" onclick="confirm('Do you want to delete `<?= $data_th['data'][$i]['topic'] ?>` ?') ? window.location.href='./sys_home/del_home_benefit_th.php?id=<?= $data_th['data'][$i]['id'] ?>' : false ">
                                                                ลบ
                                                            </div>
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_th" onclick="editTh('dataEditTh_<?= $i; ?>')">
                                                                แก้ไข
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>

                    </div>


                    
                    <div class="col-6">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - แสดงบนเว็บภาษาอังกฤษ
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="./sys_home/add_home_benefit_en.php" method="post">
                                    <label for="">หัวข้อ <span class="text-xs"></span> :</label>
                                    <input class="form-control mb-3" type="text" name="topic" required>
                                    <label for="">รายละเอียด <span class="text-xs"></span> :</label>
                                    <textarea class="form-control mb-3" rows="5" name="desc" id="" required></textarea>
                                    <button class="btn btn-success w-[100%]" type="submit">บันทึก</button>
                                </form>
                                <div class="mt-3 w-[100%] overflow-auto">
                                    <?php
                                    $data_en = [];
                                    try {
                                        $data_en = CheckHaveRowDB::slectFrom("home_benefit_en");
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    if ($data_en["rows"] > 0) {
                                    ?>
                                        <table id="table_en" class="table table-striped table-bordered">
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < $data_en['rows']; $i++) {
                                                ?>
                                                    <tr>
                                                        <textarea id="dataEditEng_<?= $i ?>" hidden><?= json_encode([
                                                                                                        "id" => $data_en['data'][$i]['id'], "topic" => $data_en['data'][$i]['topic'], "desc" => $data_en['data'][$i]['desc']
                                                                                                    ], JSON_UNESCAPED_UNICODE) ?></textarea>
                                                        <td><?= $data_en['data'][$i]['topic'] ?></td>
                                                        <td><?= nl2br($data_en['data'][$i]['desc']) ?></td>
                                                        <td>
                                                            <div class="btn btn-danger" onclick="confirm('Do you want to delete `<?= $data_en['data'][$i]['topic'] ?>` ?') ? window.location.href='./sys_home/del_home_benefit_en.php?id=<?= $data_en['data'][$i]['id'] ?>' : false ">
                                                                ลบ
                                                            </div>
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_eng" onclick="editEng('dataEditEng_<?= $i; ?>')">
                                                                แก้ไข
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal edit th-->
                    <div class="modal fade" id="edit_th" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <form action="sys_home/edit_benefit_th.php" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            แก้ไขข้อมูล : แสดงบนเว็บภาษาไทย
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div id="modalEditTh" class="modal-body">
                                        <input type="text" name="id" hidden required>
                                        <label for="">หัวข้อ <span class="text-xs"></span> :</label>
                                        <input class="form-control mb-3" type="text" name="topic" required>
                                        <label for="">รายละเอียด <span class="text-xs"></span> :</label>
                                        <textarea class="form-control mb-3" rows="5" name="desc" id="" required></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- \.Modal edit eth-->
                    <!-- Modal edit eng-->
                    <div class="modal fade" id="edit_eng" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <form action="sys_home/edit_benefit_en.php" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            แก้ไขข้อมูล : แสดงบนเว็บภาษาอังกฤษ
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div id="modalEditEng" class="modal-body">
                                        <input type="text" name="id" hidden required>
                                        <label for="">หัวข้อ <span class="text-xs"></span> :</label>
                                        <input class="form-control mb-3" type="text" name="topic" required>
                                        <label for="">รายละเอียด <span class="text-xs"></span> :</label>
                                        <textarea class="form-control mb-3" rows="5" name="desc" id="" required></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- \.Modal edit eng-->
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
        unset($_SESSION["resp_pass"]);
    }
    ?>

    <script>
        function editEng(id) {
            const data = JSON.parse($(`#${id}`).val())
            $("#modalEditEng > input[name='id']").val(data.id)
            $("#modalEditEng > input[name='topic']").val(data.topic)
            $("#modalEditEng > textarea[name='desc']").val(data.desc)
        }

        function editTh(id) {
            const data = JSON.parse($(`#${id}`).val())
            $("#modalEditTh > input[name='id']").val(data.id)
            $("#modalEditTh > input[name='topic']").val(data.topic)
            $("#modalEditTh > textarea[name='desc']").val(data.desc)
        }
    </script>

</body>

</html>