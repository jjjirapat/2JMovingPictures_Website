<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<link rel="icon" href="images/logo-color-mini.png">
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/w3.css">

		<!-- jQuery, Tether, Popper, Boostrap JS -->
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Other Scripts -->
		<script type="text/javascript">
			//Onload function
			$(document).ready(function() {
				animateWelcome();
				animateCarousel();
			});

			function animateWelcome() {
				$('#welcomeTitle1')
					.delay(1000)
					.animate({ opacity: 1 }, 1000) 
					.delay(2000)
					.animate({ left: "-=1100px" }, 'slow');

				$('#welcomeTitle2')
					.delay(2000)
					.animate({ opacity: 1 }, 1000)
					.delay(1000)
					.animate({ left: "+=1200px" }, 'slow');
			}

			function animateCarousel() {
				$('#carouselIndex')
					.delay(3500)
					.animate({ opacity: 1 }, 3000);

				$('.carousel-control-prev').click(function() {
				 	$('#carouselIndex').carousel('prev');
				});

				$('.carousel-control-next').click(function() {
				 	$('#carouselIndex').carousel('next');
				});

				$('.carousel').carousel({
				    pause: "false"
				});
			}

		</script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">
			body, html {
				height: 100%;
				margin: 0;
			}

			.welcomeTitle {
				opacity: 0;
				position: relative;
			}

			#carouselIndex {
			}

			.carousel-inner img {
			    margin-top: -100px;
			    opacity: 0.7;
			}

			.carousel,.item,.active {
				height:100%;
			}

			.carousel-inner {
				height:100%;
			}

			.carousel-caption {
				-webkit-backface-visibility: hidden;
				opacity: 0.75;
				text-shadow:
					-1px -1px 0 #000,  
					1px -1px 0 #000,
					-1px 1px 0 #000,
					1px 1px 0 #000;
				z-index: 10;
			}

			.carousel-caption a:hover {
    			text-decoration: none;
			}

		</style>
	</head>
	<body>
		<!-- Navbar -->
		<div id="navbar" style="position: relative; padding: 0px 0px; z-index: 10;">
			<ul id="navbarMenu">
			  <li>
			  	<a class="active" href="#" >Home</a>
			  </li>
			  <li>
			  	<a href="gallery.php">Gallery</a>
			  </li>
			  <li>
			  	<a href="blog.php">Blog</a>
			  </li>
			  <li>
			  	<a href="aboutme.php">About Me</a>
			  </li>
			  <li style="float: right;">
			  	<a href="letstalk.php">Let's Talk</a>
			  </li>
			</ul>
		</div>

		<!-- Welcome animation -->
		<div id="welcomeContainer" class="container-fluid" style="">
			<div id="welcomeText" style="text-align: center; position: absolute; 
				z-index: 2; left: 38%; top: 30%;">
				<h1 class="welcomeTitle" id="welcomeTitle1">Hello!</h1>
				<h1 class="welcomeTitle" id="welcomeTitle2">I'm glad you could make it.</h1>
			</div>
		</div>

		<!-- Image Carousel -->
		<div id="carouselIndex" class="carousel slide" data-ride="carousel" data-interval="7500" style="opacity: 0;">
		    <ol class="carousel-indicators">
		        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
		        <li data-target="#carouselIndicators" data-slide-to="1"></li>
		        <li data-target="#carouselIndicators" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner" role="listbox">
		        <div class="carousel-item active">
		            <img class="d-block img-fluid" src="images/gallery-photos/Carousel_1.jpg" alt="First slide">
		            <div class="carousel-caption d-none d-md-block">
		                <h2 style="">Learn more <a href="aboutme.php"><strong>about me</strong></a> or visit my <a href="blog.php"><strong>blog</strong></a></h2>
		            </div>
		        </div>
		        <div class="carousel-item">
		            <img class="d-block img-fluid" src="images/gallery-photos/Carousel_2.jpg" alt="Second slide">
		            <div class="carousel-caption d-none d-md-block">
		                <h2 style="">Browse through the <a href="gallery.php"><strong>gallery</strong></a></h2>
		            </div>
		        </div>
		        <div class="carousel-item">
		            <img class="d-block img-fluid" src="images/gallery-photos/Carousel_3.jpg" alt="Third slide">
		            <div class="carousel-caption d-none d-md-block">
		                <h2 style="">Got a question? <a href="letstalk.php"><strong>Let's talk.</strong></a></h2>
		            </div>
		        </div>
			</div>
		    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next" style="color: #707070;">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		    </a>
		</div>
	</body>
</html>