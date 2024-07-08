<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";
include_once __DIR__ . "/../back-office/database/connect.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

use function PHPSTORM_META\type;

$db = new \connect();


try {
    // var_dump($_POST);
    $data = [];
    $data['_type'] = $_POST['type'];
    foreach ($_POST as $k => $v) {
        if ($k !== "mail4send" && $k !== "type") {
            $data[$k] = $v;
        }
    }

    $stmt = $db->conn->prepare("SELECT COUNT(id) as _count FROM `form_registration` WHERE  `name_establishment`=:name_establishment");
    $stmt->execute(["name_establishment" => $_POST['name_establishment']]);
    $_count = 0;
    foreach ($stmt->fetchAll() as $k => $v) {
        $_count = $v['_count'];
    }

    if ($_FILES['id_card_file']['name'] !== "") {
        move_uploaded_file($_FILES['id_card_file']['tmp_name'], __DIR__ . "/../back-office/images/member/" . uniqid().uniqid() . "-" . $_FILES['id_card_file']['name']);
        $data['id_card_file'] = uniqid().uniqid() . "-" . $_FILES['id_card_file']['name'];
    } else {
        $data['id_card_file'] = NULL;
    }
    if ($_FILES['number_house_file']['name'] !== "") {
        move_uploaded_file($_FILES['number_house_file']['tmp_name'], __DIR__ . "/../back-office/images/member/" . uniqid().uniqid() . "-" . $_FILES['number_house_file']['name']);
        $data['number_house_file'] = uniqid().uniqid() . "-" . $_FILES['number_house_file']['name'];
    } else {
        $data['number_house_file'] = NULL;
    }
    if ($_FILES['proof_of_payment_file']['name'] !== "") {
        move_uploaded_file($_FILES['proof_of_payment_file']['tmp_name'], __DIR__ . "/../back-office/images/member/" . uniqid().uniqid() . "-" . $_FILES['proof_of_payment_file']['name']);
        $data['proof_of_payment_file'] = uniqid().uniqid() . "-" . $_FILES['proof_of_payment_file']['name'];
    } else {
        $data['proof_of_payment_file'] = NULL;
    }
    if (isset($_FILES['commercial_registration_file'])) {
        if ($_FILES['commercial_registration_file']['name'] !== "") {
            move_uploaded_file($_FILES['commercial_registration_file']['tmp_name'], __DIR__ . "/../back-office/images/member/" . uniqid().uniqid() . "-" . $_FILES['commercial_registration_file']['name']);
            $data['commercial_registration_file'] = uniqid().uniqid() . "-" . $_FILES['commercial_registration_file']['name'];
        } else {
            $data['commercial_registration_file'] = NULL;
        }
    } else {
        $data['commercial_registration_file'] = NULL;
    }

    if (isset($_POST['number_legal_entity'])) {
        $data['number_legal_entity'] = $_POST['number_legal_entity'];
    } else {
        $data['number_legal_entity'] = NULL;
    }
    if (isset($_POST['establishment_date'])) {
        $data['establishment_date'] = $_POST['establishment_date'];
    } else {
        $data['establishment_date'] = NULL;
    }


    if ($_count === 0) {

        $dbSave = CheckHaveRowDB::query("INSERT INTO `form_registration`(`type`, `title_name`, `full_name`, `birthday`, `id_card`, `name_establishment`, `office_phone`, `phone`, `email`, `website`, `date_pay`, `time_pay`, `total_pay`, `id_card_file`, `number_house_file`, `proof_of_payment_file`, `commercial_registration_file`, `number_legal_entity`, `establishment_date`) VALUES (:_type, :title_name, :full_name, :birthday, :id_card, :name_establishment, :office_phone, :phone, :email, :website, :date_pay, :time_pay, :total_pay, :id_card_file, :number_house_file, :proof_of_payment_file, :commercial_registration_file, :number_legal_entity, :establishment_date)", $data);
        echo json_encode(["status" => 200, "msg" => "ok", "sendmail" => ["name_establishment" => $_POST['name_establishment'], "msg" => "ได้ทำการสมัครสมาชิก กำลังรอการยืนยันจาก Admin", "mail4send" => $_POST['mail4send']]], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(["status" => 400, "msg" => "มีถานประกอบการนี้แล้ว",], JSON_UNESCAPED_UNICODE);
    }
} catch (Exception $e) {
    // echo json_encode(["status" => 400, "msg" => "Error"], JSON_UNESCAPED_UNICODE);
    echo $e->getMessage();
}
