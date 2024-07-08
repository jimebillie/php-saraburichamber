<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";



/**
 * Edit 
 */
if (isset($_POST['edit']) && $_POST['edit'] === "_main") {
    $dataSave = [];
    foreach ($_POST as $k => $v) {
        if ($k !== "edit" && $k !== 'id') {
            $dataSave[$k] = $v;
        }
    }


    if ($_FILES['_img']['name'] !== "") {
        $file = $_FILES['_img'];
        if (explode("/", $file['type'])[0] !== "image") {
?>
            <script>
                alert('โปรดใช้ไฟล์ภาพ')
                window.history.back();
            </script>
    <?php
            exit();
        }

        $_newName = uniqid().uniqid() . "." . explode(".", $file["name"])[count(explode('.', $file['name'])) - 1];
        $_from = $file['tmp_name'];
        $_to = __DIR__ . "/../images/news/" . $_newName;
        move_uploaded_file($_from, $_to);
        $dataSave['_img'] = $_newName;
        $dataSave['__id'] = $_POST['id'];

        $old = CheckHaveRowDB::slectFrom('news', $_POST['id']);
        if (file_exists(__DIR__ . "/../images/news/" . $old['data'][0]['_img'])) {
            unlink(__DIR__ . "/../images/news/" . $old['data'][0]['_img']);
        }

        try {
            $db = CheckHaveRowDB::query("UPDATE `news` SET `_img`=:_img,`_nam_th`=:_nam_th,`_nam_en`=:_nam_en,`_desc_th`=:_desc_th,`_desc_en`=:_desc_en WHERE `id`=:__id", $dataSave);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        header("Location: ../news_manage.php?id=" . $_POST['id']);
        exit();
    } else {
        $dataSave['__id'] = $_POST['id'];
        try {
            $db = CheckHaveRowDB::query("UPDATE `news` SET `_nam_th`=:_nam_th,`_nam_en`=:_nam_en,`_desc_th`=:_desc_th,`_desc_en`=:_desc_en WHERE `id`=:__id", $dataSave);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
        header("Location: ../news_manage.php?id=" . $_POST['id']);
        exit();
    }
}

if (isset($_POST['edit']) && $_POST['edit'] === "_desc_2_th") {
    try {
        $db = CheckHaveRowDB::query("UPDATE `news` SET `_desc_2_th`=:_desc_2_th WHERE `id`=:_id", [
            "_desc_2_th" => $_POST['_desc_2_th'],
            "_id" => $_POST['id'],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
        exit();
    }
    header("Location: ../news_manage.php?id=" . $_POST['id']);
    exit();
}
if (isset($_POST['edit']) && $_POST['edit'] === "_desc_2_en") {
    try {
        $db = CheckHaveRowDB::query("UPDATE `news` SET `_desc_2_en`=:_desc_2_en WHERE `id`=:_id", [
            "_desc_2_en" => $_POST['_desc_2_en'],
            "_id" => $_POST['id'],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
        exit();
    }
    header("Location: ../news_manage.php?id=" . $_POST['id']);
    exit();
}





/**
 * Add
 */
$dataSave = [
    "_img" => "",
    "_desc_2_th" => "",
    "_desc_2_en" => "",
];
foreach ($_POST as $k => $v) {
    $dataSave[$k] = $v;
}

$file = $_FILES['_img'];
if (explode("/", $file['type'])[0] !== "image") {
    ?>
    <script>
        alert('โปรดใช้ไฟล์ภาพ')
        window.history.back();
    </script>
<?php
    exit();
}




$_newName = uniqid().uniqid() . "." . explode(".", $file["name"])[count(explode('.', $file['name'])) - 1];
$_from = $file['tmp_name'];
$_to = __DIR__ . "/../images/news/" . $_newName;
move_uploaded_file($_from, $_to);
$dataSave['_img'] = $_newName;


try {
    $db = CheckHaveRowDB::query("INSERT INTO `news`(`_img`, `_nam_th`, `_nam_en`, `_desc_th`, `_desc_en`, `_desc_2_th`, `_desc_2_en`) VALUES (:_img, :_nam_th, :_nam_en, :_desc_th, :_desc_en, :_desc_2_th, :_desc_2_en)", $dataSave);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

header("Location: ../news.php");
exit();
