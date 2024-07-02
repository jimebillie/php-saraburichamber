<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;
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
    <div class="content">
        <div class="left-all">
            <div class="box-main">
                <div class="title-top">Contact Us</div>
                <div class="box-form-contact">


                    <form id="form_mail" method="post" onsubmit="sendMail(event)">
                        <?php
                        $contact_email_for_customer = CheckHaveRowDB::slectFrom("contact_email_for_customer")['data'];
                        foreach ($contact_email_for_customer as $k => $v) {
                        ?>


                            <input type="text" name="mail4send" value="<?= $v['email'] ?>" hidden>

                        <?php
                        }
                        ?>
                        <div class="form-list">
                            <div class="form-left">Name and last name</div>
                            <div class="form-right"><input name="_name" type="text" class="input-02" required /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">Telephone number</div>
                            <div class="form-right"><input name="_phone" type="text" class="input-02" required /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">E-mail</div>
                            <div class="form-right"><input name="_email" type="text" class="input-02" required /></div>
                        </div>
                        <div class="form-list">
                            <div class="form-left">Message</div>
                            <div class="form-right"><textarea name="_msg" cols="" rows="" class="input-03" required></textarea></div>
                        </div>

                        <div class="form-list">
                            <div class="form-right"><input type="submit" value="Send" class="btn-send-02"></input></div>
                        </div>
                    </form>


                </div>
                <div class="box-detail-contact">
                    <div class="contact-list">
                        <div class="icon-contact"><img src="../images/icon-contact-01.jpg" width="74" height="74" /></div>
                        <?php
                        $contact_phone = CheckHaveRowDB::slectFrom("contact_phone")['data'];
                        foreach ($contact_phone as $k => $v) {
                        ?>


                            <div class="text-contact"><?= $v['phone_1'] ?></div>
                            <div class="text-contact"><?= $v['phone_2'] ?></div>

                        <?php
                        }
                        ?>

                    </div>
                    <div class="contact-list">
                        <div class="icon-contact"><img src="../images/icon-contact-02.jpg" width="74" height="74" /></div>
                        <div class="text-contact"><?php
                                                    $contact_email = CheckHaveRowDB::slectFrom("contact_email")['data'];
                                                    foreach ($contact_email as $k => $v) {
                                                    ?>

                                <?= $v['email'] ?>

                            <?php
                                                    }
                            ?></div>

                    </div>
                    <div class="contact-list">
                        <div class="icon-contact"><img src="../images/icon-contact-03.jpg" width="74" height="74" /></div>
                        <div class="text-contact"><?php
                                                    $contact_address = CheckHaveRowDB::slectFrom("contact_address")['data'];
                                                    foreach ($contact_address as $k => $v) {
                                                    ?>

                                <?= $v['address_en'] ?>

                            <?php
                                                    }
                            ?></div>

                    </div>

                </div>
                <div class="box-social">
                    <div class="social-list">
                        <div class="icon-social"><img src="../images/icon-contact-fb.jpg" width="74" height="74" /></div>
                        <div class="text-social">
                            <?php
                            $contact_facebook = CheckHaveRowDB::slectFrom("contact_facebook")['data'];
                            foreach ($contact_facebook as $k => $v) {
                            ?>
                                <?= $v['facebook_name'] ?>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="social-list">
                        <div class="icon-social"><img src="../images/icon-contact-msg.jpg" width="74" height="74" /></div>
                        <div class="text-social">
                            <?php
                            $contact_messenger = CheckHaveRowDB::slectFrom("contact_messenger")['data'];
                            foreach ($contact_messenger as $k => $v) {
                            ?>

                                <?= $v['messenger_name'] ?>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="social-list">
                        <div class="icon-social"><img src="../images/icon-contact-line.jpg" width="74" height="74" /></div>
                        <div class="text-social">
                            <div class="text-social">
                                <?php
                                $contact_line = CheckHaveRowDB::slectFrom("contact_line")['data'];
                                foreach ($contact_line as $k => $v) {
                                ?>
                                    <?= $v['line_name'] ?>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="map">
                    <?php
                    $contact_map = CheckHaveRowDB::slectFrom("contact_map")['data'];
                    foreach ($contact_map as $k => $v) {
                    ?>

                        <?= $v['map'] ?>
                    <?php
                    }
                    ?>
                </div>
                <?php include 'inc/btn-register-all.php'; ?>
            </div>

        </div>


        <?php include 'inc/partner.php'; ?>



    </div>
    <?php include 'inc/footer.php'; ?>

    <script>
        async function sendMail(e) {
            e.preventDefault();
            try {

                const form = document.getElementById('form_mail');
                const formData = new FormData(form);
                const api = await fetch("../sys_mail/sendmail_contact.php", {
                    method: "POST",
                    body: formData
                });
                alert("ส่งข้อมูลเรียบร้อย");
                window.location.reload();
            } catch (e) {
                console.log(e)
            }
        }
    </script>
</body>

</html>