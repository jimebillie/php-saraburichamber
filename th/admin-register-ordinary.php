<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";
include_once __DIR__ . "/../back-office/database/connect.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;

$db = new \connect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>หอการค้าจังหวัดสระบุรี</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../css/header.css" rel="stylesheet" type="text/css" />
    <link href="../css/header-m.css" rel="stylesheet" type="text/css" />
    <link href="../css/header-t.css" rel="stylesheet" type="text/css" />
    <link href="../css/content.css" rel="stylesheet" type="text/css" />
    <link href="../css/content-m.css" rel="stylesheet" type="text/css" />
    <link href="../css/content-t.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-m.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-t.css" rel="stylesheet" type="text/css" />
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="content">
        <div class="left-all">
            <div class="box-main">
                <div class="title-top">สมัครสมาชิก</div>
                <div class="box-text-aboutus">
                    <div class="title-aboutus">แบบฟอร์มสมัครสมาชิก</div>
                    <div class="box-select-type">
                        <div class="title-select-type">กรุณาเลือกในนาม : </div>
                        <div class="select-type"><a href="admin-register-ordinary.php">บุคคลธรรมดา</a></div>
                        <div class="select-type-02"><a href="admin-register-juristic.php">นิติบุคล</a></div>

                    </div>

                    <form id="form_send" onsubmit="sendData(event)" enctype="multipart/form-data">
                        <div class="box-form">
                            <div class="form-list">
                                <div class="form-left">คำนำหน้า</div>
                                <div class="form-right">
                                    <?php
                                    $contact_email_for_customer = CheckHaveRowDB::slectFrom("contact_email_for_customer")['data'];
                                    foreach ($contact_email_for_customer as $k => $v) {
                                    ?>
                                        <input type="text" name="mail4send" value="<?= $v['email'] ?>" hidden>
                                        <input type="text" name="type" value="1" hidden>
                                    <?php
                                    }
                                    ?>
                                    <select name="title_name" class="input-01">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-list">
                                <div class="form-left">ชื่อ-นามสกุล</div>
                                <div class="form-right">
                                    <input name="full_name" type="text" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">วัน/เดือน/ปี เกิด</div>
                                <div class="form-right">
                                    <input type="date" name="birthday" class="input-01">
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">เลขที่บัตรประชาชน</div>
                                <div class="form-right">
                                    <input name="id_card" type="text" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">แนบไฟล์ บัตรประชาชน</div>
                                <div class="form-right">
                                    <input type="file" name="id_card_file" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">แนบไฟล์ ทะเบียนบ้าน</div>
                                <div class="form-right">
                                    <input type="file" name="number_house_file" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">ชื่อสถานประกอบการ</div>
                                <div class="form-right"><input name="name_establishment" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">เบอร์โทรศัพท์สำนักงาน</div>
                                <div class="form-right"><input name="office_phone" type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">เบอร์โทรศัพท์มือถือ</div>
                                <div class="form-right"><input name="phone" type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">อีเมล</div>
                                <div class="form-right"><input name="email" type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">ชื่อเว็บไซต์</div>
                                <div class="form-right"><input name="website" type="text" class="input-01" /></div>
                            </div>

                            <div class="form-list">
                                <div class="form-left">วันที่ ชำระเงิน</div>
                                <div class="form-right"><input type="date" name="date_pay" class="input-01"></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">เวลา ชำระเงิน</div>
                                <div class="form-right"><input type="time" name="time_pay" class="input-01"></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">จำนวนเงิน</div>
                                <div class="form-right"><input name="total_pay" type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">สลิปการโอนเงิน</div>
                                <div class="form-right"><input type="file" name="proof_of_payment_file" class="input-01" /></div>
                            </div>
                        </div>
                        <div class="text-comment">บังคับใส่ชื่อสถานประกอบการ</div>
                        <div class="send"><input type="submit" value="ส่งข้อมูลการสมัครสมาชิก" class="btn-send" /></div>
                    </form>
                </div>
            </div>

        </div>






    </div>
    <div class="footer">
        <div class="copy">© saraburichamber.or.th . All Rights Reserved.</div>
        <div class="icon-bar"> <a href="#"><img src="../images/app-line.png" width="50" height="50" /></a>
        </div>
    </div>

    <script>
        async function sendData(e) {
            e.preventDefault();
            try {
                const form = document.getElementById('form_send');
                const formData = new FormData(form);
                const api = await fetch("add-register-ordinary.php", {
                    method: "POST",
                    body: formData
                });
                const res = await api.json();
                if (res.status === 400) {
                    alert(res.msg);
                } else {

                    const formData = new FormData();
                    formData.append('name_establishment', res.sendmail.name_establishment);
                    formData.append('msg', res.sendmail.msg);
                    formData.append('mail4send', res.sendmail.mail4send);
                    const api = await fetch("../sys_mail/sendmail.php", {
                        method: "POST",
                        body: formData
                    });
                    alert("ส่งข้อมูลเรียบร้อยแล้วกรุนารอการตอบบกลับ");
                    window.location.reload();

                }
            } catch (e) {
                console.log(e)
            }

        }
    </script>
</body>

</html>