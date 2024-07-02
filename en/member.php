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

<body>
<div class="header">
	<?php include 'inc/logo-language.php';?> 
    
  <?php include 'inc/menu.php';?> 

</div>
<div class="content">
<div class="left-all">
<div class="box-main">
<div class="logo-member"><img src="../images/logo-customer-01.jpg" width="260" height="160" /></div>
	<div class="title-member-top">บริษัท สระบุรี จำกัด</div>
    

</div>

</div>
     
<div class="left-member">
	<div class="box-main">
    	<div class="banner">
<section id="slippry-slider" class="full-width">
			<article class="demo_block">
				
				
			<ul id="demo1">
				
             <li><img src="../images/banner-member-01.jpg"></li>
             <li><img src="../images/banner-member-01.jpg"></li>

			</ul>
			</article>
	</section>
  </div>
  <div class="banner-m">
<section id="slippry-slider" class="full-width">
			<article class="demo_block">
				
				
			<ul id="demo2">
				
             <li><img src="../images/banner-member-01.jpg"></li>
             <li><img src="../images/banner-member-01.jpg"></li>

			</ul>
			</article>
	</section>
  </div>
    <div class="picture-member"><img src="../images/picture-member.jpg" width="620" height="415" /></div>
    <div class="title-member">บริษัท สระบุรี จำกัด</div>
    <div class="text-member">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div class="editor-member">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div class="back-all-01"><a href="benefits-member.php">< Back</a></div>
	</div>


</div>
  

   
     
  </div>        
<?php include 'inc/footer.php';?>       
          
          <script>
			$(function() {
				var demo1 = $("#demo1").slippry({
					// transition: 'fade',
					// useCSS: true,
					 speed: 2000,
					 pause: 2000,
					 pager:false,
					 responsive:true,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function () {
					demo1.stopAuto();
				});

				$('.start').click(function () {
					demo1.startAuto();
				});

				$('.prev').click(function () {
					demo1.goToPrevSlide();
					return false;
				});
				$('.next').click(function () {
					demo1.goToNextSlide();
					return false;
				});
				$('.reset').click(function () {
					demo1.destroySlider();
					return false;
				});
				$('.reload').click(function () {
					demo1.reloadSlider();
					return false;
				});
				$('.init').click(function () {
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
					 pager:false,
					 responsive:true,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function () {
					demo2.stopAuto();
				});

				$('.start').click(function () {
					demo2.startAuto();
				});

				$('.prev').click(function () {
					demo2.goToPrevSlide();
					return false;
				});
				$('.next').click(function () {
					demo2.goToNextSlide();
					return false;
				});
				$('.reset').click(function () {
					demo2.destroySlider();
					return false;
				});
				$('.reload').click(function () {
					demo2.reloadSlider();
					return false;
				});
				$('.init').click(function () {
					demo2 = $("#demo2").slippry();
					return false;
				});
			});
		</script>
        
</body>
</html>