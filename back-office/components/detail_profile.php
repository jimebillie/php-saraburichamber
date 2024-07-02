<div class="mb-0 name"><span class="wrap_i_dropdown"><i class="fa-solid fa-circle-chevron-down me-1"></i></span>
    <?= $_SESSION["auth_user"] ?>
</div>
<div class="wrap_box_detail_profile_name" disP-event="hide">
    <div class="p-3">
        <div class="mb-1"><b>สถานะ : </b><span class="badge border rounded-pill bg-success">ออนไลน์</span></div>
        <div class="mb-1"><b>ชื่อผู้ใช้ : </b><?= $_SESSION["auth_user"] ?></div>
        <div class="mb-2"><b>บทบาท : </b><span><?= $_SESSION["auth_role"] ?></span></div>

        <hr>
        <div class="mb-1"><a href="sys_auth/logout.php"><span class="badge bg-secondary p-2 w-100"><i class="fa-solid fa-arrow-right-from-bracket"></i> ออกจากระบบ</span></a></div>
    </div>
</div>