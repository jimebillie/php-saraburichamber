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
	<script src="../js/jquery.min.js"></script>
	<script src="../js/slippry.min.js"></script>
	<link href="../css/demo.css" rel="stylesheet" type="text/css">
	<link href="../css/slippry.css" rel="stylesheet" type="text/css">

</head>
<?php
$benefits_good_product = CheckHaveRowDB::slectFrom("benefits_good_product", $_GET['id'])['data'];
foreach ($benefits_good_product as $k => $v) {
?>

	<body>
		<div class="header">
			<?php include 'inc/logo-language.php'; ?>

			<?php include 'inc/menu.php'; ?>

		</div>
		<div class="content">
			<div class="left-all">
				<div class="box-main">
					<div class="logo-member">
						<img src="../back-office/images/benefits/good_product/<?= $v['_img_logo'] ?>" width="260" height="160" />
					</div>
					<div class="title-member-top"><?= $v['_name'] ?></div>


				</div>

			</div>

			<div class="left-member">
				<div class="box-main">
					<div class="banner">
						<section id="slippry-slider" class="full-width">
							<article class="demo_block">


								<ul id="demo1">
									<?php
									$benefits_good_product_slide = CheckHaveRowDB::slectFrom("benefits_good_product_slide", $_GET['id'], "id_main")['data'];
									foreach ($benefits_good_product_slide as $k_sl => $v_sl) {
									?>
										<li>
											<img src="../back-office/images/benefits/good_product/<?= $v_sl['img'] ?>">
										</li>

									<?php
									}
									?>

								</ul>

							</article>
						</section>
					</div>
					<div class="banner-m">
						<section id="slippry-slider" class="full-width">
							<article class="demo_block">


								<ul id="demo2">
									<?php
									$benefits_good_product_slide = CheckHaveRowDB::slectFrom("benefits_good_product_slide", $_GET['id'], "id_main")['data'];
									foreach ($benefits_good_product_slide as $k_sl => $v_sl) {
									?>
										<li>
											<img src="../back-office/images/benefits/good_product/<?= $v_sl['img'] ?>">
										</li>

									<?php
									}
									?>
								</ul>

							</article>
						</section>
					</div>
					<div class="picture-member"><img src="../back-office/images/benefits/good_product/<?= $v["_img"] ?>" width="620" height="415" /></div>
					<div class="title-member"><?= $v['name_establishment'] ?></div>
					<div class="text-member">
						<?= nl2br($v["_desc_1"]) ?>
					</div>
					<div class="editor-member">
						<?= nl2br($v["_desc_2"]) ?>
					</div>

					<div class="back-all-01">
						<a href="benefits-good-product.php">ย้อนกลับ</a>
					</div>
				</div>


			</div>




		</div>
		<?php include 'inc/footer.php'; ?>

		<script>
			$(function() {
				var demo1 = $("#demo1").slippry({
					// transition: 'fade',
					// useCSS: true,
					speed: 2000,
					pause: 2000,
					pager: false,
					responsive: true,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function() {
					demo1.stopAuto();
				});

				$('.start').click(function() {
					demo1.startAuto();
				});

				$('.prev').click(function() {
					demo1.goToPrevSlide();
					return false;
				});
				$('.next').click(function() {
					demo1.goToNextSlide();
					return false;
				});
				$('.reset').click(function() {
					demo1.destroySlider();
					return false;
				});
				$('.reload').click(function() {
					demo1.reloadSlider();
					return false;
				});
				$('.init').click(function() {
					demo1 = $("#demo1").slippry();
					return false;
				});
			});
		</script>
		<script>
			$(function() {
				var demo2 = $("#demo2").slippry({
					// transition: 'fade',
					// useCSS: true,
					speed: 2000,
					pause: 2000,
					pager: false,
					responsive: true,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function() {
					demo2.stopAuto();
				});

				$('.start').click(function() {
					demo2.startAuto();
				});

				$('.prev').click(function() {
					demo2.goToPrevSlide();
					return false;
				});
				$('.next').click(function() {
					demo2.goToNextSlide();
					return false;
				});
				$('.reset').click(function() {
					demo2.destroySlider();
					return false;
				});
				$('.reload').click(function() {
					demo2.reloadSlider();
					return false;
				});
				$('.init').click(function() {
					demo2 = $("#demo2").slippry();
					return false;
				});
			});
		</script>

	</body>
<?php
}
?>



</html>