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
    <div class="header">
        <?php include 'inc/logo-language.php'; ?>

        <?php include 'inc/menu.php'; ?>

    </div>
    <form id="form_send" onsubmit="sendData(event)" enctype="multipart/form-data">
        <div class="content">
            <div class="left-all">
                <div class="box-main">
                    <div class="title-top">Register</div>
                    <div class="box-text-aboutus">
                        <div class="title-aboutus">Membership application form</div>
                        <div class="box-select-type">
                            <div class="title-select-type">Please select in the name of :</div>
                            <div class="select-type"><a href="register-ordinary.php">Ordinary person</a></div>
                            <div class="select-type-02"><a href="register-juristic.php">Juristic person</a></div>

                        </div>
                        <div class="box-form">
                            <div class="form-list">
                                <div class="form-left">Prefix</div>
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
                                    <select name="title_name" required class="input-01">
                                        <option value="" selected="selected">Please select</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss">Miss</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-list">
                                <div class="form-left">Name and last name</div>
                                <div class="form-right">
                                    <input name="full_name" required type="text" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Day/month/year of birth</div>
                                <div class="form-right">
                                    <input type="date" name="birthday" required class="input-01">
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">ID card number</div>
                                <div class="form-right">
                                    <input name="id_card" required type="text" class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Attach ID card file</div>
                                <div class="form-right">
                                    <input type="file" name="id_card_file" required class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Attach house registration file</div>
                                <div class="form-right">
                                    <input type="file" name="number_house_file" required class="input-01" />
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Company name</div>
                                <div class="form-right"><input name="name_establishment" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Office phone number</div>
                                <div class="form-right"><input name="office_phone" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Mobile phone number</div>
                                <div class="form-right"><input name="phone" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">E-mail</div>
                                <div class="form-right"><input name="email" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Website name</div>
                                <div class="form-right"><input name="website" type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Membership fee</div>
                                <div class="form-right">
                                    Initial membership fee 300 baht + annual membership fee 2,000 baht<br /><br />
                                    Total amount to be paid is 2,300 baht.</div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Payment information</div>
                                <div class="form-right"><img src="../images/picture-bank.jpg" width="150" height="80" /><br /><br />
                                    Account name Saraburi Chamber of Commerce<br />
                                    Kasikorn Bank<br />
                                    Account number 123-456-789<br />
                                    Saraburi Branch
                                </div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Date of payment</div>
                                <div class="form-right"><input type="date" name="date_pay" required class="input-01"></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Payment time</div>
                                <div class="form-right"><input type="time" name="time_pay" required class="input-01"></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Amount of money</div>
                                <div class="form-right"><input name="total_pay" required type="text" class="input-01" /></div>
                            </div>
                            <div class="form-list">
                                <div class="form-left">Money transfer slip</div>
                                <div class="form-right"><input type="file" name="proof_of_payment_file" required class="input-01" /></div>
                            </div>
                        </div>
                        <div class="text-comment">Please fill out all fields and pay before clicking to submit membership information.</div>
                        <div class="send"><input type="submit" value="Send information" class="btn-send" /></div>
                    </div>
                </div>

            </div>




        </div>
    </form>
    <?php include 'inc/footer.php'; ?>

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