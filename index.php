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

				$('#carouselIndex')
					.delay(3500)
					.animate({ opacity: 1 }, 3000);
				
				//setTimeout(function() {
				//	$('#welcomeTitle1').html('<-- This is me');}, 5000);

				$('.carousel-control-prev').click(function() {
				 	$('#carouselIndex').carousel('prev');
				});

				$('.carousel-control-next').click(function() {
				 	$('#carouselIndex').carousel('next');
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
				position: relative;
				opacity: 0;
			}

			#carouselIndex {
			}

			.carousel-inner img {
			    opacity: 0.65;
			    margin-top: -100px;
			}

			.carousel,.item,.active {
				height:100%;
			}

			.carousel-inner {
				height:100%;
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
				z-index: 2; left: 40%; top: 30%;">
				<h1 class="welcomeTitle" id="welcomeTitle1">Hello!</h1>
				<h1 class="welcomeTitle" id="welcomeTitle2">I'm glad you could make it.</h1>
			</div>
		</div>

		<!-- Image Carousel -->
		<div id="carouselIndex" class="carousel slide" data-interval="5000" data-ride="carousel" style="opacity: 0;">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img class="d-block img-fluid" src="images/gallery-photos/Carousel_1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/gallery-photos/Carousel_2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid" src="images/gallery-photos/Carousel_3.jpg" alt="Third slide">
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