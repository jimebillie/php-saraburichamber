<?php
session_start();
require_once __DIR__ . "/../database/connect.php";
$db = new connect();
require_once __DIR__ . "/../helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

// var_dump($_FILES);
if (CheckHaveRowDB::slectFrom("contact_qr")['rows'] === 0) {
    //-> insert 
    $dataSave = [
        "__img" => ""
    ];
    if ($_FILES["qr"]["name"] !== "") {
        $lastnameFile = explode(".", $_FILES["qr"]["name"])[count(explode(".", $_FILES["qr"]["name"])) - 1];
        $type = explode("/", $_FILES["qr"]['type']);
        if ($type[0] !== "image") { //-> When not image
?>
            <script>
                alert("โปรดอัพโหลดไฟล์ภาพเท่านั้น");
                window.history.back()
            </script>
        <?php
            exit();
        }

        $newname = date("YmdHis") . "-qr" . "." . $lastnameFile; //-> newname
        move_uploaded_file($_FILES["qr"]["tmp_name"], __DIR__ . "/../images/qr/" . $newname);
        $dataSave["__img"] = $newname;
    }
    try {
        $stmt = $db->conn->prepare("INSERT INTO `contact_qr`(`img`) VALUES (:__img)");
        $stmt->execute($dataSave);
        header("Location: ../contact.php#qr");
        exit();
    } catch (Exception $e) {
        echo $e;
        exit();
    }
} else {
    //-> Update 
    $oldData = CheckHaveRowDB::slectFrom("contact_qr")['data'];
    $dataSave = [
        "__img" => $oldData[0]["img"]
    ];
    if ($_FILES["qr"]["name"] !== "") {
        $lastnameFile = explode(".", $_FILES["qr"]["name"])[count(explode(".", $_FILES["qr"]["name"])) - 1];
        $type = explode("/", $_FILES["qr"]['type']);
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
        if (file_exists(__DIR__ . "/../images/qr/" . $dataSave["__img"])) {
            unlink(__DIR__ . "/../images/qr/" . $dataSave["__img"]);
        }
        $newname = date("YmdHis") . "-qr" . "." . $lastnameFile; //-> newname
        move_uploaded_file($_FILES["qr"]["tmp_name"], __DIR__ . "/../images/qr/" . $newname);
        $dataSave["__img"] = $newname;
    }
    try {
        $stmt = $db->conn->prepare("UPDATE `contact_qr` SET `img`=:__img");
        $stmt->execute($dataSave);
        header("Location: ../contact.php#qr");
        exit();
    } catch (Exception $e) {
        echo $e;
        exit();
    }
}
