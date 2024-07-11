<?php

include_once "helper/check_row_db.php";

use Helper\CheckHaveRowDB\CheckHaveRowDB;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ข้อมูลสมาชิกหอการค้าจังหวัดสระบุรี</title>
	<style type="text/css">
		.box-all {
			float: left;
			height: auto;
			width: 600px;
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 14px;
			line-height: 25px;
			color: #000;
		}

		.box-all-1 {
			float: left;
			height: auto;
			width: 250px;
			margin-top: 10px;
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 14px;
			line-height: 25px;
			color: #000;
		}

		.box-all-2 {
			float: right;
			height: auto;
			width: 300px;
			margin-top: 10px;
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 14px;
			line-height: 25px;
			color: #000;
		}

		.box-title-top {
			text-align: left;
			float: left;
			height: auto;
			width: 600px;
			margin-top: 5px;
			margin-bottom: 5px;
			padding-top: 5px;
			padding-bottom: 5px;
			border-top-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 1px;
			border-left-width: 0px;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-top-color: #999;
			border-right-color: #999;
			border-bottom-color: #999;
			border-left-color: #999;
			font-weight: bold;
		}

		.box-list-01 {
			float: left;
			height: auto;
			width: 100%;
			margin-bottom: 3px;
			padding-bottom: 3px;
			border-bottom-width: 1px;
			border-bottom-style: solid;
			border-bottom-color: #CCC;
		}

		.box-title {
			float: left;
			height: auto;
			width: 100%;
			font-weight: bold;
		}

		.box-text {
			float: left;
			height: auto;
			width: 95%;
			margin-left: 5%;
		}

		.picture {
			float: left;
			height: auto;
			width: 100%;
		}

		.picture img {
			height: auto;
			width: 100%;
		}

		.print {
			text-align: center;
			float: left;
			height: auto;
			width: 100%;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		@media print {
			.noPrint {
				display: none;
			}
		}
	</style>
</head>

<body>
	<?php
	foreach (CheckHaveRowDB::slectFrom("form_registration", $_GET['id'])['data'] as $v) {
	?>
		<div class="box-all">
			<div class="box-title-top">ข้อมูลสมาชิกหอการค้าจังหวัดสระบุรี</div>
			<div class="print"><button onclick="window.print()" class="noPrint">Print this page</button></div>
			<div class="box-all-1">

				<div class="box-list-01">
					<div class="box-title">ประเภทสมาชิก</div>
					<div class="box-text">นิติบุคคล</div>

				</div>
				<div class="box-list-01">
					<div class="box-title">คำนำหน้า</div>
					<div class="box-text"><?= $v['title_name'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">ชื่อ-นามสกุล</div>
					<div class="box-text"><?= $v['full_name'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">วัน/เดือน/ปี เกิด</div>
					<div class="box-text"><?= $v['birthday'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">เลขที่บัตรประชาชน</div>
					<div class="box-text"><?= $v['id_card'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">ชื่อสถานประกอบการ</div>
					<div class="box-text"><?= $v['name_establishment'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">เลขที่นิติบุคคล</div>
					<div class="box-text"><?= $v['number_legal_entity'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">วันที่จดทะเบียนจัดตั้ง</div>
					<div class="box-text"><?= $v['establishment_date'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">เบอร์โทรศัพท์สำนักงาน</div>
					<div class="box-text"><?= $v['office_phone'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">เบอร์โทรศัพท์มือถือ</div>
					<div class="box-text"><?= $v['phone'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">อีเมล</div>
					<div class="box-text"><?= $v['email'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">ชื่อเว็บไซต์</div>
					<div class="box-text"><?= $v['website'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">วันที่ ชำระเงิน</div>
					<div class="box-text"><?= $v['date_pay'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">เวลา ชำระเงิน</div>
					<div class="box-text"><?= $v['time_pay'] ?></div>

				</div>
				<div class="box-list-01">
					<div class="box-title">จำนวนเงิน</div>
					<div class="box-text"><?= $v['total_pay'] ?></div>

				</div>
			</div>

		</div>
	<?php
	}
	?>
</body>

</html>