<html lang='en'>
<head>
<title>Nature's Touch Photography</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet"
	href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.4/themes/smoothness/jquery-ui.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.4/jquery-ui.min.js"></script>
<!-- <script type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.js"></script> -->
<!-- <script
	src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-basic.min.css"> -->

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet">



<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
	integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
	crossorigin="anonymous">



<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="app/css/header.css">
<link rel="stylesheet" type="text/css" href="app/css/Footer-white.css">
<link rel="stylesheet" type="text/css" href="app/css/fluid-gallery.css">
<link rel="stylesheet" type="text/css" href="app/css/gallery.css">
<link rel="stylesheet" type="text/css" href="app/css/home.css">
<link rel="stylesheet" type="text/css" href="app/css/footer.css">
<link rel="stylesheet" type="text/css" href="app/css/destination.css">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<link href="https://fonts.googleapis.com/css?family=EB+Garamond"
	rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poiret+One"
	rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Anton"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit"
	rel="stylesheet">

<!-- <link
	href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script
	src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>


	<header id="header">
		<div class="container">

			<div id="logo" class="pull-left">
				<h3>
					<a href="#intro" class="scrollto">❀ Nature's touch photography ❀</a>
				</h3>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="../index.php">Home</a></li>
					<li><a href="../index.php?controller=destination&action=show">Destination</a></li>
					<li><a href="https://ntphawaii.shootproof.com/" target="_blank">Galleries</a></li>
					<li><a href="../index.php?controller=about&action=about">About</a></li>
					<li><a href="">Hire Us</a></li>

				</ul>
			</nav>

			<!-- #nav-menu-container -->

		</div>
	</header>
	<!-- #header -->




	<!-- *************************************************** -->

	<div class="row logo-row">
		<div class="col-md-4 col-md-offset-1 text-center">

			<div id="logo_img" class="div_image text-center">
				<img class="img-responsive" src="app/imgs/logo/logo_new_1.png">
			</div>
		</div>

		<div class="col-md-5 text-center header-text-container">
			<p style="text-align: center; vertical-align: middle;">
<?php if($controller == 'home') {?>
			When you wish to go beyond ordinary photographs of family members, Nature's Touch Photography should be your first choice.

We offer a professional photographic experience, wide range of products and services, along with a dedication to produce images that exceed your expectations. 
Our photography services include: vow renewals, engagements,maternity photography, business portraits, family and other memorable family occasions.
<br> <br>
Keep your memories of your stay in Oahu forever !
<?php } else if($controller == 'destination') {?>
 We serve our clients in their dream destinations.
 Whether you’re planning a wedding in beautiful Hawaii or an engagement session in Texas or Europe we are always more than willing to accommodate your destination needs wherever it may take us. 
<br>
Be sure to check where we’re heading next 
<?php } else if($controller == 'about') {?>
We believe creativity is heightened through thinking differently and embracing diversity. 
We continually expand our creativity, not only in photography and cinema but also in the everyday approach into Original Piece of Art that will be cherished for generations.

<?php }?>
			</p>
		</div>

	</div>

	<div class="row social-icons-row">
		<div class="col-md-4 col-md-offset-8 text-center">
			<ul class="list-inline social-icons">
				<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
				<li><a href=""><i class="fab fa-instagram "></i></a></li>
				<li><a href=""><i class="fas fa-envelope "></i></a></li>
			</ul>

		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<hr id="header_separator">
		</div>
	</div>
	<!-- *************************************************** -->


 <?php
require_once ('app/models/gallery_image.php');
require_once ('app/routes.php');
?>

  
<!--  	<footer id="myFooter">
		  <div class="footer-social">
			  <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a> <a
				href="#" class="social-icons"><i class="fab fa-facebook-f"></i></a> <a
				href="#" class="social-icons"><i class="fab fa-instagram"></i></a>
		</div> 



		<div class="row" style="margin-top: 1%;">
			<div class="container footer-nav">
				<ul>
					  <li><a
						href="http://localhost/foto/index.php?controller=home&action=home">Početna</a></li>
					<li><a
						href="http://localhost/foto/index.php?controller=gallery&action=all_galleries">Galerija</a></li>
					<li><a
						href="http://localhost/foto/index.php?controller=video&action=all_videos">Video</a></li>
					<li><a class="contact-link"
						href="http://localhost/foto/index.php?controller=contact&action=contact">BACK TO TOP</a></li>
				</ul>

			</div>
			<div class="col-xs-12">
				<p class="text-center"
					style="font-family: 'Fjalla One', sans-serif;">© 2018 Nature's Touch Photography</p>
			</div>
		</div>

	</footer>-->





	<footer>
		<div style="min-height: 250px;" class="footer" id="footer-sub">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h5 class="contact-link">PHOTOS</h5>
						<ul>
							<li><a class="contact-link" href="">Weedings</a>
								<hr></li>
							<li><a class="contact-link" href="">VOW Renewals</a>
								<hr></li>
							<li><a class="contact-link" href="">Family</a>
								<hr></li>
							<li><a class="contact-link" href="">Maternity & New born</a>
								<hr></li>

						</ul>
					</div>

					<div class="col-md-4">
						<h5 class="contact-link">Destinations</h5>
						<ul>
							<li><a class="contact-link" href="">USA</a>
								<hr></li>
							<!--  <li><a class="contact-link" href="">EUROPE</a><hr></li> -->
						</ul>
					</div>

					<div class="col-md-4">
						<h5 class="contact-link">HIRE US</h5>
						<ul>
							<li><a class="contact-link" href="">About</a>
								<hr></li>
							<li><a class="contact-link" href="">Contact</a>
								<hr></li>
						</ul>
					</div>

				</div>


				<hr style="margin-bottom: 0px; margin-top: 30px; padding: 0px;">
				<div class="row" id="sub-two">

					<div class="col-md-4">
						<div class="vertical-line text-center">
							<span><a class="footer-link" href="#"><i
									class="fas fa-home footer-icon"></i></a></span>
							<h4>HOME</h4>
						</div>
					</div>

					<div class="col-md-4">
						<div class="vertical-line text-center">
							<span><a class="footer-link" href="#"><i
									class="fab fa-facebook-f footer-icon"></i></a></span>
							<h4>FACEBOOK</h4>
						</div>
					</div>

					<div class="col-md-4">
						<div style="margin: 8px;" class="text-center">
							<span><a class="footer-link" href="#"><i
									class="fab fa-instagram footer-icon"></i></a></span>
							<h4 style="color: #6d6c6c;">INSTAGRAM</h4>
						</div>
					</div>


				</div>
				<hr style="margin-bottom: 30px; margin-top: 0px; padding: 0px;">



			</div>
		</div>
		<div style="min-height: 50px;" id="footer-main">

			<ul>
				<li><a class="contact-link" href=""><b>© 2018 Nature's Touch
							Photography</b></a></li>
			</ul>

			<div id="social-menu">
				<ul>
					<li><a href=""><img style="max-width: 18px; margin-top: -7px;"
							src=""></a></li>
					<li><a href=""><img style="max-width: 18px; margin-top: -7px;"
							src=""></a></li>
					<li><a href=""><img style="max-width: 18px; margin-top: -7px;"
							src=""></a></li>
				</ul>
			</div>

		</div>
	</footer>























	<!-- <script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
	<script src="app/scripts/header.js"></script>

	<!-- <script
	src="app/scripts/destination.js"></script> -->

	<script src="app/scripts/header_menu.js"></script>
	<script src="app/scripts/scroll.js"></script>


	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
    baguetteBox.run('.tz-gallery');
</script>



</body>
</html>
