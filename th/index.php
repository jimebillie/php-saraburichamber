<?php
require_once __DIR__ . "/../back-office/helper/check_row_db.php";
require_once __DIR__ . "/../back-office/database/connect.php";

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
	<link rel="stylesheet" href="../css/jquery.vm-carousel.css">
	<script src="../js/jquery.vm-carousel.js"></script>
	<script src="../js/modernizr.js"></script>
</head>

<body>
	<div class="header">
		<?php include 'inc/logo-language.php'; ?>

		<?php include 'inc/menu.php'; ?>
		<div class="banner">
			<section id="slippry-slider" class="full-width">
				<article class="demo_block">


					<ul id="demo1">
						<?php
						$demo1 = CheckHaveRowDB::slectFrom("home_banner_th")['data'];
						foreach ($demo1 as $k => $v) {
						?>
							<li><img src="../back-office/images/home/banner/th/<?= $v['pc'] ?>"></li>
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
						$demo2 = CheckHaveRowDB::slectFrom("home_banner_th")['data'];
						foreach ($demo2 as $k => $v) {
						?>
							<li><img src="../back-office/images/home/banner/th/<?= $v['mobile'] ?>"></li>
						<?php
						}
						?>
					</ul>
				</article>
			</section>
		</div>
	</div>
	<div class="content">
		<div class="left-01">
			<div class="box-main">
				<div class="title-top">หอการค้าจังหวัดสระบุรี</div>
				<div class="box-picture-aboutus-home">
					<?php
					$home_aboutus_img = CheckHaveRowDB::slectFrom("home_aboutus_img")['data'];
					foreach ($home_aboutus_img as $k => $v) {
					?>
						<img src="../back-office/images/home/home_aboutus/<?= $v['img'] ?>" width="625" height="415" />
					<?php
					}
					?>


				</div>
				<div class="box-text-aboutus-home">
					<?php
					$home_aboutus_th = CheckHaveRowDB::slectFrom("home_aboutus_th")['data'];
					foreach ($home_aboutus_th as $k => $v) {
					?>
						<?= $v['detail'] ?>
					<?php
					}
					?>
				</div>
				<div class="more-01"><a href="aboutus.php">อ่านต่อ></a></div>
			</div>

		</div>
		<div class="left-02">
			<div class="box-main">

				<div class="title-all">ข่าวสารและกิจกรรม</div>
				<div class="box-post-fb">
					<div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100071356444897" data-tabs="timeline" data-width="330" data-height="550" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
						<blockquote cite="https://www.facebook.com/profile.php?id=100071356444897" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100071356444897">หอการค้าจังหวัดสระบุรี - Saraburi chamber</a></blockquote>
					</div>

				</div>

				<?php
				$news = array_reverse(CheckHaveRowDB::slectFrom("news")['data']);
				for ($i = 0; $i < 2; $i++) {
					if (!isset($news[$i]['id'])) {
					} else {
				?>
						<div class="box-news-list-home">
							<div class="picture-news">
								<a href="news&amp;activity-detail.php?id=<?= $news[$i]['id'] ?>">
									<img src="../back-office/images/news/<?= $news[$i]['_img'] ?>" width="425" height="285" />
								</a>
							</div>
							<div class="title-news"><?= $news[$i]['_nam_th'] ?></div>
							<div class="text-news">
								<?= $news[$i]['_desc_th'] ?>
							</div>
							<div class="more-01"><a href="news&amp;activity-detail.php?id=<?= $news[$i]['id'] ?>">อ่านต่อ></a></div>
						</div>

				<?php
					}
				}
				?>
				<div class="more-all-01"><a href="news&amp;activity.php">ดูทั้งหมด</a></div>

			</div>

		</div>

		<div class="left-03">
			<div class="box-main">

				<div class="title-all">สิทธิประโยชน์สมาชิก</div>
				<div class="box-picture-benefits-home">
					<?php
					$home_benefit_img = CheckHaveRowDB::slectFrom("home_benefit_img")['data'];
					foreach ($home_benefit_img as $k => $v) {
					?>
						<img src="../back-office/images/home/home_benefits/<?= $v['img'] ?>" width="735" height="400" />
					<?php
					}
					?>
				</div>
				<div class="box-text-benefits-home">
					<?php
					$home_benefit_th = CheckHaveRowDB::slectFrom("home_benefit_th")['data'];
					foreach ($home_benefit_th as $k => $v) {
					?>
						<div class="box-text-benefits-home-list">
							<div class="title-benefits-home"><?= $v['topic'] ?></div>
							<div class="text-benefits-home">
								<?= nl2br($v['desc']) ?>
							</div>
						</div>

					<?php
					}
					?>


				</div>
				<div class="more-all-01"><a href="benefits.php">ดูทั้งหมด</a></div>
				<div class="btn-line-register"><a href="register-ordinary.php"><img src="../images/icon-register.jpg" width="65" height="65" />สมัครสมาชิก</a></div>
			</div>
		</div>

		<div class="left-02">
			<div class="box-main">
				<div class="title-all">ป้ายของดีหอการค้าจังหวัดสระบุรี</div>
				<div class="box-good-product">

					<?php
					$home_bestitems = CheckHaveRowDB::slectFrom("home_bestitems")['data'];
					for ($i = 0; $i < 6; $i++) {
						if ($home_bestitems[0]['img_' . $i + 1] !== "") {
					?>
							<div class="picture-good-product-list"><img src="../back-office/images/home/home_bestitems/<?= $home_bestitems[0]['img_' . $i + 1] ?>" width="465" height="320" /></div>
					<?php
						}
					}
					?>


				</div>
				<div class="more-all-01"><a href="benefits-good-product.php">ดูทั้งหมด</a></div>

			</div>


		</div>
		<div class="left-03">
			<div class="box-main">
				<div class="title-all">เครือข่ายสมาชิก</div>
				<div class="box-customer">
					<ul class="vmcarousel-centered-infitine">

						<?php
						$stmt = $db->conn->prepare("SELECT `id`, `logo` FROM `form_registration` WHERE `display_home`='show'");
						$stmt->execute();
						foreach ($stmt->fetchAll() as $k => $v) {
						?>
							<li><img src="../back-office/images/member/<?= $v['logo'] ?>" alt="" width="260"></li>
						<?php
						}
						?>

					</ul>
				</div>
				<div class="more-all-01"><a href="benefits-member.php">ดูทั้งหมด</a></div>

			</div>
		</div>
		<?php include 'inc/partner.php'; ?>
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
	<script>
		jQuery(function($) {
			$('.vmcarousel-centered').vmcarousel({
				centered: true,
				start_item: 2,
				autoplay: true,
				infinite: false
			});

			$('.vmcarousel-centered-infitine').vmcarousel({
				delay: 2000,
				speed: 500,
				autoplay: true,
				items_to_show: 0,
				min_items_to_show: 1,
				items_to_slide: 1,
				dont_cut: true,
				centered: false,
				start_item: 0,
				start_item_centered: false,
				infinite: false,
				changed_slide: $.noop()

			});

			$('.vmcarousel-normal').vmcarousel({
				centered: false,
				start_item: 0,
				autoplay: true,
				infinite: false
			});
		});
	</script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v20.0" nonce="3ufu9UWk"></script>
</body>

</html>