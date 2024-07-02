<?php
include_once __DIR__ . "/../back-office/helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;
?>
<div class="footer">

  <div class="box-footer-top">
    <div class="box-main">
      <div class="box-footer-left">
        <div class="title-footer">Menu:</div>
        <div class="menu-footer">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="benefits.php">Member Benefits</a></li>
          <li><a href="register-ordinary.php">Register</a></li>
          <li><a href="news&amp;activity.php">News & Activities</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </div>
      </div>
      <div class="box-footer-center">
        <div class="title-footer">Contact:</div>
        <div class="contact-footer-01">

          <?php
          $contact_phone = CheckHaveRowDB::slectFrom("contact_phone")['data'];
          foreach ($contact_phone as $k => $v) {
          ?>
            <a href="tel:<?= $v['phone_1'] ?>">
              <?= $v['phone_1'] ?>
            </a>
          <?php
          }
          ?>

        </div>
        <div class="contact-footer-02">
          <?php
          $contact_email = CheckHaveRowDB::slectFrom("contact_email")['data'];
          foreach ($contact_email as $k => $v) {
          ?>

            <?= $v['email'] ?>

          <?php
          }
          ?>
        </div>
        <div class="contact-footer-03">
          <?php
          $contact_address = CheckHaveRowDB::slectFrom("contact_address")['data'];
          foreach ($contact_address as $k => $v) {
          ?>

            <?= $v['address_en'] ?>

          <?php
          }
          ?>
        </div>
      </div>
      <div class="box-footer-right">
        <div class="title-footer">Follow us on:</div>
        <div class="icon-footer">
          <?php
          $contact_facebook = CheckHaveRowDB::slectFrom("contact_facebook")['data'];
          foreach ($contact_facebook as $k => $v) {
          ?>
            <a href="<?= $v['facebook_link'] ?>" target="_blank"><img src="../images/icon-footer-fb.jpg" width="49" height="29" /></a>
          <?php
          }
          ?>
          <?php
          $contact_messenger = CheckHaveRowDB::slectFrom("contact_messenger")['data'];
          foreach ($contact_messenger as $k => $v) {
          ?>
            <a href="<?= $v['messenger_link'] ?>" target="_blank"><img src="../images/icon-footer-msg.jpg" width="49" height="49" /></a>
          <?php
          }
          ?>
          <?php
          $contact_line = CheckHaveRowDB::slectFrom("contact_line")['data'];
          foreach ($contact_line as $k => $v) {
          ?>
            <a href="<?= $v['line_link'] ?>" target="_blank"><img src="../images/icon-footer-line.jpg" width="49" height="49" /></a>
          <?php
          }
          ?>

        </div>
        <div class="qrcode">
          <?php
          $contact_qr = CheckHaveRowDB::slectFrom("contact_qr")['data'];
          foreach ($contact_qr as $k => $v) {
          ?>
            <img src="../back-office/images/qr/<?= $v['img'] ?>" width="225" height="225" />
          <?php
          }
          ?>
        </div>
      </div>


    </div>
  </div>

  <div class="copy">© saraburichamber.or.th . All Rights Reserved.</div>
  <div class="icon-bar">
    <?php
    $contact_line = CheckHaveRowDB::slectFrom("contact_line")['data'];
    foreach ($contact_line as $k => $v) {
    ?>
      <a href="<?= $v['line_link'] ?>" target="_blank"><img src="../images/app-line.png" width="50" height="50" /></a>

    <?php
    }
    ?>
  </div>

  <script>
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
      } else {
        document.getElementById("topBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <button onclick="topFunction()" id="topBtn" title="Go to top">TOP</button>
</div>