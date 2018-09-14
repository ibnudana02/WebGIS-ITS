<!DOCTYPE html>
<html lang="en">
<head>
<style>
		html, body, #mapid, #map{
			height: 100%;
			margin: 0px;
			padding: 0px;
		}
			.leaflet-control-attribution {display:none!important}
</style>
<script language='javascript' >
var txt='Integrated Transportation System Bus DAMRI   ';
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();</script>
<title>    </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trucking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url();?>a/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>a/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>a/css/mainStyles.css" />
<link rel='stylesheet' href='<?php echo base_url();?>a/css/dscountdown.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php echo base_url(); ?>a/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- gallery -->
<link href="<?php echo base_url(); ?>a/css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="<?php echo base_url(); ?>a/css/font-awesome.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<!-- js -->
<script type="text/javascript" src="<?php echo base_url(); ?>a/js/jquery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<!-- //js -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
<!-- banner -->
<div class="header">
		<div class="w3layouts_header_right">
			<div class="detail-w3l">
			<ul>
				<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> (0762) 322153 – 323033</li>

			</ul>
		</div>

		</div>
		<div class="w3layouts_header_left">
			<ul>
					<li><a href="<?php echo base_url();?>login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>

				</ul>
		</div>
		<div class="agileits-social top_content">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

		<div class="clearfix"> </div>
	</div>
	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h3><a class="navbar-brand" href="<?php echo base_url(); ?>"><span><i class="fa fa-truck" aria-hidden="true"></i></span>ITS DISHUB KAMPAR</a></h3>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li ><a href="<?php echo base_url();?>"><span data-hover="Home">Home</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Informasi">Informasi</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="<?php echo base_url();?>user/jadwal">Jadwal Bus DAMRI</a></li>
								<li><a href="<?php echo base_url();?>user/rute">Rute Trayek</a></li>
								<li><a href="<?php echo base_url();?>user/shelter">Perhentian Bus DAMRI</a></li>
								<li><a href="<?php echo base_url();?>user/track">Track Bus</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>user/contact"><span data-hover="Contact Us">Contact Us</span></a></li>
					</ul>
				</nav>

			</div>
		</nav>
		</div>

	<div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url();?>user/home"><?php echo $judul?></a><i>|</i></li>
				<li><?php echo $sub_judul?><i>|</i></li>
				<li><?php echo $sub?></li>
			</ul>
		</div>
	</div>
<!-- Map -->
<?php echo $this->load->view($content,'',TRUE);?>	

<script type="text/javascript" src="<?php echo base_url();?>a/js/jquery-2.1.4.min.js"></script>
<!-- -->
<div class="w3-footer-contact">
	<div class="container">
		<div class="col-md-4 w3-footer-contact-left">
			<h3>DAMRI BANDARA</h3>
			<p>Kemudahan yang diberikan oleh PERUM DAMRI untuk masyarakat berupa pelayanan jasa angkutan orang menuju Bandara.</p>
		</div>
		<div class="col-md-4 w3-footer-contact-middle">
			
		</div>
		<div class="col-md-4 w3-footer-contact-right">
			<div class="col-md-2 w3-footer-contact-icon1">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="col-md-10 w3-footer-contact-info">
			<p>Location:</p>
			<h4>Jl. Tuanku Tambusai, Bangkinang</h4>

			</div>
			<div class="clearfix"></div>
			<div class="col-md-2 w3-footer-contact-icon1">
		<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
			</div>
			<div class="col-md-10 w3-footer-contact-info">
			<p>Call:</p>
			<h4>(0762) 322153 – 323033</h4>

			</div>
			<div class="clearfix"></div>
			<div class="col-md-2 w3-footer-contact-icon1">
			<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="col-md-10 w3-footer-contact-info">
			<p>Email:</p>
			<h4><a href="mailto:dishubkabkampar@gmail.com"> dishubkabkampar@gmail.com</a></h4>

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

</div>
<!-- //footer-contact -->
<div class="footer-final">
		<div class="copyw3-agile">
			<div class="container">
				<p>&copy; 2018 Integrated Transportation System | DISHUB Kampar | PERUM DAMRI. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>


<script src="<?php echo base_url(); ?>a/js/mainScript.js"></script>
<script src="<?php echo base_url(); ?>a/js/rgbSlide.min.js"></script>
<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:2
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="<?php echo base_url(); ?>a/js/jquery.flexisel.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="<?php echo base_url(); ?>a/js/SmoothScroll.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url(); ?>a/js/move-top.js"></script>
				<script type="text/javascript" src="<?php echo base_url(); ?>a/js/easing.js"></script>
	<script src="<?php echo base_url(); ?>a/js/bootstrap.js"></script>
</body>
</html>
