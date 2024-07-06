<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

try {
    if (isset($_POST['edit']) && $_POST["edit"] === "_cover") {
        if (CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])['rows']) {

            if ($_FILES['_cover']['name'] !== "") {
                /**
                 * Check type file
                 */
                if (explode("/", $_FILES['_cover']['type'])[0] !== "image") {
?>
                    <script>
                        alert('โปรดใช้ไฟล์รูปภาพเท่านั้น');
                        window.history.back();
                    </script>
            <?php
                    exit();
                }
                if (file_exists(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_cover"])) {
                    unlink(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_cover"]);
                }
                $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['_cover']['name'])[count(explode(".", $_FILES['_cover']['name'])) - 1]; //-> newname
                $from = $_FILES['_cover']['tmp_name']; //-> from
                $to = __DIR__ . "/../images/benefits/good_product/" . $newName; //-> to
                move_uploaded_file($from, $to); //-> move

                CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_cover`=:__cover,`_name`=:__name WHERE `id`=:__id ", [
                    "__cover" => $newName,
                    "__name" => $_POST['_name'],
                    "__id" => $_POST['id']
                ]);
            } else {
                CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_name`=:__name WHERE `id`=:__id ", [
                    "__name" => $_POST['_name'],
                    "__id" => $_POST['id']
                ]);
            }
            ?>
            <script>
                window.history.back();
            </script>
            <?php
            exit();
        }
    }


    if (isset($_POST['edit']) && $_POST["edit"] === "_img_logo") {
        if (CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])['rows']) {

            if ($_FILES['_img_logo']['name'] !== "") {
                /**
                 * Check type file
                 */
                if (explode("/", $_FILES['_img_logo']['type'])[0] !== "image") {
            ?>
                    <script>
                        alert('โปรดใช้ไฟล์รูปภาพเท่านั้น');
                        window.history.back();
                    </script>
            <?php
                    exit();
                }
                if (file_exists(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_img_logo"])) {
                    unlink(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_img_logo"]);
                }
                $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['_img_logo']['name'])[count(explode(".", $_FILES['_img_logo']['name'])) - 1]; //-> newname
                $from = $_FILES['_img_logo']['tmp_name']; //-> from
                $to = __DIR__ . "/../images/benefits/good_product/" . $newName; //-> to
                move_uploaded_file($from, $to); //-> move

                CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_img_logo`=:__img_logo WHERE `id`=:__id ", [
                    "__img_logo" => $newName,
                    "__id" => $_POST['id']
                ]);
            }
            ?>
            <script>
                window.history.back();
            </script>
            <?php
            exit();
        }
    }

    if (isset($_POST['edit']) && $_POST["edit"] === "_img") {
        if (CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])['rows']) {

            if ($_FILES['_img']['name'] !== "") {
                /**
                 * Check type file
                 */
                if (explode("/", $_FILES['_img']['type'])[0] !== "image") {
            ?>
                    <script>
                        alert('โปรดใช้ไฟล์รูปภาพเท่านั้น');
                        window.history.back();
                    </script>
            <?php
                    exit();
                }
                if (file_exists(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_img"])) {
                    unlink(__DIR__ . "/../images/benefits/good_product/" . CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])["data"][0]["_img"]);
                }
                $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['_img']['name'])[count(explode(".", $_FILES['_img']['name'])) - 1]; //-> newname
                $from = $_FILES['_img']['tmp_name']; //-> from
                $to = __DIR__ . "/../images/benefits/good_product/" . $newName; //-> to
                move_uploaded_file($from, $to); //-> move

                CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_img`=:__img WHERE `id`=:__id ", [
                    "__img" => $newName,
                    "__id" => $_POST['id']
                ]);
            }
            ?>
            <script>
                window.history.back();
            </script>
        <?php
            exit();
        }
    }


    if (isset($_POST['edit']) && $_POST["edit"] === "_desc_1") {
        if (CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])['rows']) {



            CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_desc_1`=:_desc_1 WHERE `id`=:__id ", [
                "_desc_1" => $_POST["_desc_1"],
                "__id" => $_POST['id']
            ]);

        ?>
            <script>
                window.history.back();
            </script>
        <?php
            exit();
        }
    }
    if (isset($_POST['edit']) && $_POST["edit"] === "_desc_2") {
        if (CheckHaveRowDB::slectFrom('benefits_good_product', $_POST['id'])['rows']) {



            CheckHaveRowDB::query("UPDATE `benefits_good_product` SET `_desc_2`=:_desc_2 WHERE `id`=:__id ", [
                "_desc_2" => $_POST["_desc_2"],
                "__id" => $_POST['id']
            ]);

        ?>
            <script>
                window.history.back();
            </script>
        <?php
            exit();
        }
    }



    //-> Insert main

    /**
     * Check type file
     */
    if (explode("/", $_FILES['_cover']['type'])[0] !== "image") {
        ?>
        <script>
            alert('โปรดใช้ไฟล์รูปภาพเท่านั้น');
            window.history.back();
        </script>
<?php
        exit();
    }

    $newName = $_SERVER["UNIQUE_ID"] . "." . explode(".", $_FILES['_cover']['name'])[count(explode(".", $_FILES['_cover']['name'])) - 1]; //-> newname
    $from = $_FILES['_cover']['tmp_name']; //-> from
    $to = __DIR__ . "/../images/benefits/good_product/" . $newName; //-> to
    move_uploaded_file($from, $to); //-> move

    CheckHaveRowDB::query("INSERT INTO `benefits_good_product`(`_cover`, `_name`, `_img`, `_img_logo`,`_desc_1`, `_desc_2`) VALUES (:_cover, :_name, :_img, :_img_logo, :_desc_1, :_desc_2) ", [
        "_cover" => $newName,
        "_name" => $_POST['_name'],
        "_img" => "",
        "_img_logo" => "",
        "_desc_1" => "",
        "_desc_2" => ""
    ]);

    header("Location: ../benefits_good_product.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
