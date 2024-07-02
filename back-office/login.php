<?php
session_start();
/**
 * Middleware 
 */
if (isset($_SESSION["auth"])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/bootstrap-5.3.1/css/bootstrap.min.css">
    <!--\.bootstrap-->
    <!--fontawesome-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/fontawesome-6.4.2/css/all.min.css">
    <!--\.fontawesome-->
    <!--Login css-->
    <link rel="stylesheet" href="https://jimebillie.github.io/template-admin/environment-jimebillie/css/login.css">
    <!--\.Login css-->
</head>

<body>
    <div class="login-bg-fixed">
        <div class="wrap-image-cover-pc d-none d-md-inline-block col-md-8">
            <div id="wrap-tag-image1"></div>
        </div>
        <div class="wrap-panel-login col-12 col-md-4">
            <div id="wrap-tag-image2" class="d-block d-md-none"></div>
            <div class="wrap-content-login">
                <div class="content-login-center">
                    <form action="sys_auth/login.php" method="post">

                        <h1><i class="fa-solid fa-unlock-keyhole" style="color: goldenrod"></i> ระบบล็อกอิน</h1>
                        <h5 class="text-secondary">หอการค้าจังหวัดสระบุรี - Back-office</h5>

                        <hr>
                        <div class="form-floating mb-2">
                            <input class="form-control border border-secondary" type="text" id="username" name="username" placeholder="Username">
                            <label for="username"><i class="fa-solid fa-user"></i> ชื่อผู้ใช้ : </label>
                        </div>
                        <div class="form-floating" id="wrap-password">
                            <input class="form-control  border border-secondary" type="password" id="password" name="password" placeholder="Password">
                            <label for="password"><i class="fa-solid fa-star-of-life"></i> รหัสผ่าน : </label>
                            <div class="wrap-eye-password">
                                <i class="text-secondary fa-solid fa-eye" onclick="open_pass(this)"></i>
                                <i class="text-secondary fa-solid fa-eye-slash d-none" onclick="close_pass(this)"></i>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['resp_warn'])) {
                        ?>
                            <div class="mt-3">
                                <div class="alert alert-warning">
                                    <b><?= $_SESSION["resp_warn"]; ?></b>
                                </div>
                            </div>
                        <?php
                            unset($_SESSION["resp_warn"]);
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['resp_err'])) {
                        ?>
                            <div class="mt-3">
                                <div class="alert alert-danger">
                                    <b><?= $_SESSION["resp_err"]; ?></b>
                                </div>
                            </div>
                        <?php
                            unset($_SESSION["resp_err"]);
                        }
                        ?>
                        <div class="mt-3">
                            <button class="btn btn-secondary w-100 border border-secondary border-2 fw-bold p-2" type="submit">เข้าสู่ระบบ
                            </button>
                        </div>
                        <hr>
                        <small>&copy; 2024</small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--bootstrap-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    <!--\.bootstrap-->
    <!--fontawesome-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/fontawesome-6.4.2/js/all.min.js"></script>
    <!--\.fontawesome-->
    <!--Login css-->
    <script src="https://jimebillie.github.io/template-admin/environment-jimebillie/javascript/login.js"></script>
    <script>
        const set_image_login_page = new change_cover_image("https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")
    </script>
    <!--\.Login css-->
</body>

</html>