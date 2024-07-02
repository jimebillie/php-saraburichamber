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
                        <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-5">
                        <div class="mb-2" id="contact_email_for_customer">
                            <b class="text-2xl">
                                - เพิ่มอีเมล์สำหรับส่งแบบฟอร์มหน้าเว็บ
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="sys_contact/add_contact_email_for_customer.php" method="post">
                                    <?php
                                    $contact_email_for_customer = "";
                                    try {
                                        $stmt = $db->conn->prepare("SELECT * FROM `contact_email_for_customer`");
                                        $stmt->execute();
                                        $count_db = 0;
                                        foreach ($stmt->fetchAll() as $row) {
                                            $contact_email_for_customer = $row["email"];
                                        }
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="">
                                            <label for="">
                                                อีเมล์ :
                                            </label>
                                            <input class="form-control" type="email" name="email" value="<?= $contact_email_for_customer ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่มเบอร์โทร
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="sys_contact/add_phone.php" method="post">
                                    <?php
                                    $db_phone_1 = "";
                                    $db_phone_2 = "";
                                    try {
                                        $stmt = $db->conn->prepare("SELECT * FROM `contact_phone`");
                                        $stmt->execute();
                                        $count_db = 0;
                                        foreach ($stmt->fetchAll() as $row) {
                                            $db_phone_1 = $row["phone_1"];
                                            $db_phone_2 = $row["phone_2"];
                                        }
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    ?>
                                    <div class="row">
                                        <div class=" ">
                                            <label for="phone_number1">
                                                เบอร์ที่ 1 :
                                            </label>
                                            <input class="form-control" type="text" name="phone_number1" id="phone_number1" value="<?= $db_phone_1 ?>" required>
                                        </div>
                                        <div class=" ">
                                            <label for="phone_number2">
                                                เบอร์ที่ 2 :
                                            </label>
                                            <input class="form-control" type="text" name="phone_number2" id="phone_number2" value="<?= $db_phone_2 ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่มที่อยู่
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_address = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_address`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_address = $row["address"];
                                        $db_address_en = $row["address_en"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form id="frm_address" action="sys_contact/add_address.php" method="post">
                                    <div class="row">
                                        <div class="">
                                            <label for="address">
                                                ที่อยู่ *แสดงบนเว็บภาษาไทย :
                                            </label>
                                            <textarea class="form-control" name="address" id="address" rows="3" required><?= $db_address ?></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <label for="address">
                                                ที่อยู่ *แสดงบนเว็บภาษาอังกฤษ :
                                            </label>
                                            <textarea class="form-control" name="address_en" id="address_en" rows="3" required><?= $db_address_en ?></textarea>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่ม Email
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_email = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_email`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_email = $row["email"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_email.php" method="post">
                                    <div class="row">
                                        <div class="">
                                            <label for="email">
                                                Email :
                                            </label>
                                            <input class="form-control" type="email" name="email" id="email" value="<?= $db_email ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่ม Facebook
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_facebook_name = "";
                                $db_facebook_link = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_facebook`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_facebook_name = $row["facebook_name"];
                                        $db_facebook_link = $row["facebook_link"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_facebook.php" method="post">
                                    <div class="row">
                                        <div class=" ">
                                            <label for="facebook_name">
                                                Facebook name :
                                            </label>
                                            <input class="form-control" type="text" name="facebook_name" id="facebook_name" value="<?= $db_facebook_name ?>" required>
                                        </div>
                                        <div class=" my-1"></div>
                                        <div class=" ">
                                            <label for="facebook_link">
                                                Facebook link :
                                            </label>
                                            <input class="form-control" type="text" name="facebook_link" id="facebook_link" value="<?= $db_facebook_link ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่ม Messenger
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_messenger_name = "";
                                $db_messenger_link = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_messenger`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_messenger_name = $row["messenger_name"];
                                        $db_messenger_link = $row["messenger_link"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_messenger.php" method="post">
                                    <div class="row">
                                        <div class=" ">
                                            <label for="messenger_name">
                                                Messenger name :
                                            </label>
                                            <input class="form-control" type="text" name="messenger_name" id="messenger_name" value="<?= $db_messenger_name ?>" required>
                                        </div>
                                        <div class=" my-1"></div>
                                        <div class=" ">
                                            <label for="messenger_link">
                                                Messenger link :
                                            </label>
                                            <input class="form-control" type="text" name="messenger_link" id="messenger_link" value="<?= $db_messenger_link ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่ม Line
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_line_name = "";
                                $db_line_link = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_line`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_line_name = $row["line_name"];
                                        $db_line_link = $row["line_link"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_line.php" method="post">
                                    <div class="row">
                                        <div class=" ">
                                            <label for="line_name">
                                                Line name :
                                            </label>
                                            <input class="form-control" type="text" name="line_name" id="line_name" value="<?= $db_line_name ?>" required>
                                        </div>
                                        <div class=" my-1"></div>
                                        <div class=" ">
                                            <label for="line_link">
                                                Line link :
                                            </label>
                                            <input class="form-control" type="text" name="line_link" id="line_link" value="<?= $db_line_link ?>" required>
                                        </div>
                                        <div class=" mt-3">
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
                                - เพิ่มแผนที่
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_map = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_map`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_map = $row["map"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_map.php" method="post">
                                    <div class="row">
                                        <div class=" ">
                                            <label for="map">
                                                แผนที่แบบ iframe :
                                            </label>
                                            <textarea class="form-control" name="map" id="map" rows="8" required><?= $db_map ?></textarea>
                                        </div>
                                        <div class=" mt-3">
                                            <button class="btn btn-primary" type="submit">
                                                อัพเดท
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                    <!-- QR -->
                    <div class="mb-5">
                        <div class="mb-2">
                            <b class="text-2xl">
                                - เพิ่ม QR Code
                            </b>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $db_qr = "";
                                try {
                                    $stmt = $db->conn->prepare("SELECT * FROM `contact_qr`");
                                    $stmt->execute();
                                    foreach ($stmt->fetchAll() as $row) {
                                        $db_qr = $row["img"];
                                    }
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                                ?>
                                <form action="sys_contact/add_qr.php" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <?php
                                        if ($db_qr !== "") {
                                        ?>
                                            <div>
                                                <img class="w-[200px] mb-3" src="images/qr/<?= $db_qr ?>" alt="">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class=" ">
                                            <label for="map">
                                                เพิ่มรูป QR Code :
                                            </label>
                                            <input class="form-control" type="file" name="qr" id="qr">
                                        </div>
                                        <div class=" mt-3">
                                            <button class="btn btn-primary" type="submit">
                                                อัพเดท
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <!-- \.QR -->
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

</body>

</html>