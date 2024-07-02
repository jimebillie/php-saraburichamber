<?php

use Helper\CheckHaveRowDB\CheckHaveRowDB;

require_once __DIR__ . "/../helper/check_row_db.php";

$_func = new form_registration();

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

$_func->save_post($_POST);
/**
 * File
 */
$_func->save_file($_FILES['id_card_file'], "id_card_file");
$_func->save_file($_FILES['number_house_file'], "number_house_file");
$_func->save_file($_FILES['commercial_registration_file'], "commercial_registration_file");
$_func->save_file($_FILES['proof_of_payment_file'], "proof_of_payment_file");
/**
 * Image 
 */
$_func->save_file($_FILES['logo'], "logo", true);
$_func->save_file($_FILES['main_img'], "main_img", true);
/**
 * Group image
 */
$dataSlideBanner = [];
for ($i = 0; $i < count($_FILES['slide_banner']['name']); $i++) {
    array_push(
        $dataSlideBanner,
        $_func->image_slide_banner_type_check(
            $_FILES['slide_banner']['type'][$i],
            $i,
            $_FILES['slide_banner']['name'][$i],
            $_FILES['slide_banner']['tmp_name'][$i]
        )
    );
}
if ($dataSlideBanner[0] !== NULL) {
    $oldfile = CheckHaveRowDB::slectFrom("form_registration", $_POST['id']);
    if ($oldfile['data'][0]['slide_banner'] !== NUll && $oldfile['data'][0]['slide_banner'] !== "") {
        $_func->image_slide_banner_save2db($oldfile['data'][0]['slide_banner'] . ',' . implode(",", $dataSlideBanner));
    } else {
        $_func->image_slide_banner_save2db(implode(",", $dataSlideBanner));
    }
}

header("Location: ../registration.php");
exit();






class form_registration
{
    private $_id;
    private $_unique_id;
    private $_column_db = "";
    private $_data_file = [];
    private $_folder_file = "";
    private $_lastname_file = "";

    function __construct()
    {
        $this->_id = $_POST['id'];
        $this->_folder_file = __DIR__ . "/../images/member/";
        $this->_unique_id = $_SERVER['UNIQUE_ID'];
    }
    function save_post($data)
    {
        try {
            $dataSave = [];
            foreach ($data as $k => $v) {
                if ($k !== "id") {
                    $dataSave[$k] = $v;
                    $dataSave['approve_status'] = '1';
                    $dataSave['_id'] = $this->_id;
                }
            }
            CheckHaveRowDB::query("UPDATE `form_registration` SET `title_name`=:title_name, `full_name`=:full_name, `birthday`=:birthday, `id_card`=:id_card, `name_establishment`=:name_establishment, `number_legal_entity`=:number_legal_entity, `establishment_date`=:establishment_date, `office_phone`=:office_phone, `phone`=:phone, `email`=:email, `website`=:website, `date_pay`=:date_pay, `time_pay`=:time_pay, `total_pay`=:total_pay, `desc_1`=:desc_1, `desc_2`=:desc_2, `approve_status`=:approve_status WHERE `id`=:_id", $dataSave);
            return 'ok';
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    function save_file($data, $_column, $chk_img = false)
    {
        if ($data['name'] !== "") {
            $this->_column_db = $_column;
            $this->_data_file = $data;
            $this->_lastname_file = "." . explode('.', $this->_data_file['name'])[count(explode('.', $this->_data_file['name'])) - 1];

            if ($chk_img === false) {
                $this->save_file2folder();
            } else {
                return $this->check_image_type();
            }
        }
    }
    function check_image_type()
    {
        if (explode("/", $this->_data_file['type'])[0] === "image") {
            $this->save_file2folder();
        } else {
?>
            <script>
                alert('<?= $this->_column_db ?> โปรดใช้ไฟล์ภาพ');
                window.location.href = '../registration.php';
            </script>
<?php
            exit();
        }
    }
    function image_slide_banner_type_check($type, $index, $name, $tmp_name)
    {
        if (explode("/", $type)[0] === "image") {
            $newName = $this->_unique_id . "-slide-banner-" . $index . "." . explode('.', $name)[count(explode('.', $name)) - 1];;
            $from = $tmp_name;
            $to = $this->_folder_file . $newName;
            move_uploaded_file($from, $to);
            return $newName;
        }
    }
    function image_slide_banner_save2db($_slide_banner)
    {
        try {
            CheckHaveRowDB::query("UPDATE `form_registration` SET `slide_banner`=:_slide_banner WHERE `id`=:_id", [
                "_slide_banner" => $_slide_banner,
                "_id" => $this->_id
            ]);
            return 'ok';
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
    function save_file2folder()
    {
        $this->unlink_file();
        $newName = $this->_unique_id . "-" . $this->_column_db . $this->_lastname_file;
        $from = $this->_data_file['tmp_name'];
        $to = $this->_folder_file . $this->_unique_id . "-" . $this->_column_db . $this->_lastname_file;
        move_uploaded_file($from, $to);
        $this->save_file_2db($newName);
    }
    function unlink_file()
    {
        $oldfile = CheckHaveRowDB::slectFrom("form_registration", $this->_id);
        if (file_exists($this->_folder_file . $oldfile['data'][0][$this->_column_db])) {
            unlink($this->_folder_file . $oldfile['data'][0][$this->_column_db]);
        }
    }
    function save_file_2db($name_file)
    {
        try {
            $column = $this->_column_db;
            CheckHaveRowDB::query("UPDATE `form_registration` SET  $column=:_v WHERE `id`=:_id", [
                "_v" => $name_file,
                "_id" => $this->_id
            ]);
            return 'ok';
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
