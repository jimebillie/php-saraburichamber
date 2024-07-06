<?php
session_start();
require_once __DIR__ . "/../database/connect.php";
$db = new connect();
require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

// var_dump($_FILES);


if (CheckHaveRowDB::slectFrom("home_bestitems")['rows'] === 0) {
    //-> insert 
    $data_save = [
        "__img_1" => "",
        "__img_2" => "",
        "__img_3" => "",
        "__img_4" => "",
        "__img_5" => "",
        "__img_6" => "",
    ];
    for ($i = 0; $i < 6; $i++) {
        if ($_FILES["img_" . $i + 1]["name"] !== "") {
            $lastnameFile = explode(".", $_FILES["img_" . $i + 1]["name"])[count(explode(".", $_FILES["img_" . $i + 1]["name"])) - 1];
            $type = explode("/", $_FILES["img_" . $i + 1]['type']);
            if ($type[0] !== "image") { //-> When not image
?>
                <script>
                    alert("โปรดอัพโหลดไฟล์ภาพเท่านั้น");
                    window.history.back()
                </script>
            <?php
                exit();
            }

            $newname = date("YmdHis") . "-home_bestitems-" . $i + 1 . "." . $lastnameFile; //-> newname
            move_uploaded_file($_FILES["img_" . $i + 1]["tmp_name"], __DIR__ . "/../images/home/home_bestitems/" . $newname);
            $data_save["__img_" . $i + 1] = $newname;
        }
    }
    try {
        $stmt = $db->conn->prepare("INSERT INTO `home_bestitems`(`img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`) VALUES (:__img_1,:__img_2,:__img_3,:__img_4,:__img_5,:__img_6)");
        $stmt->execute($data_save);
        header("Location: ../home_bestitems.php");
        exit();
    } catch (Exception $e) {
        echo $e;
        exit();
    }
} else {
    //-> update 
    $oldData = CheckHaveRowDB::slectFrom("home_bestitems")['data'];
    $data_save = [
        "__img_1" => $oldData[0]["img_1"],
        "__img_2" => $oldData[0]["img_2"],
        "__img_3" => $oldData[0]["img_3"],
        "__img_4" => $oldData[0]["img_4"],
        "__img_5" => $oldData[0]["img_5"],
        "__img_6" => $oldData[0]["img_6"],
    ];
    //-> Loop
    for ($i = 0; $i < 6; $i++) {
        if ($_FILES["img_" . $i + 1]["name"] !== "") {
            $lastnameFile = explode(".", $_FILES["img_" . $i + 1]["name"])[count(explode(".", $_FILES["img_" . $i + 1]["name"])) - 1];
            $type = explode("/", $_FILES["img_" . $i + 1]['type']);
            if ($type[0] !== "image") { //-> When not image
            ?>
                <script>
                    alert("โปรดอัพโหลดไฟล์ภาพเท่านั้น");
                    window.history.back()
                </script>
<?php
                exit();
            }

            /**
             * Unlik file
             */
            if (file_exists(__DIR__ . "/../images/home/home_bestitems/" . $data_save["__img_" . $i + 1])) {
                unlink(__DIR__ . "/../images/home/home_bestitems/" . $data_save["__img_" . $i + 1]);
            }

            $newname = date("YmdHis") . "-home_bestitems-" . $i + 1 . "." . $lastnameFile; //-> newname
            move_uploaded_file($_FILES["img_" . $i + 1]["tmp_name"], __DIR__ . "/../images/home/home_bestitems/" . $newname);
            $data_save["__img_" . $i + 1] = $newname;
        }
    }
    try {
        $stmt = $db->conn->prepare("UPDATE `home_bestitems` SET `img_1`=:__img_1,`img_2`=:__img_2,`img_3`=:__img_3,`img_4`=:__img_4,`img_5`=:__img_5,`img_6`=:__img_6");
        $stmt->execute($data_save);
        header("Location: ../home_bestitems.php");
        exit();
    } catch (Exception $e) {
        echo $e;
        exit();
    }
}
