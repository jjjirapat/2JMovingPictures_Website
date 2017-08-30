<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About me</title>
		<link rel="icon" href="images/logo-color-mini.png">
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/animations.css">

		<!-- jQuery, Tether, Popper, Boostrap JS -->
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Other Scripts -->
		<script type="text/javascript">
			//Onload function
			$(document).ready(function() {

				$('#followme')
					.delay(2500)
					.animate({ opacity: 0, top: "+=500px" }, 5000);
				$('#followperson')
					.delay(2500)
					.animate({ opacity: 0, top: "+=500px" }, 5000);
										
			});

		</script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">
			body, html {
				height: 100%;
				margin: 0;
			}

			#followme {
				position: relative;
				top: 150px;
				left: 40%;
				opacity: 1;
			}

			.about-container-1 {
				position: relative; 
				top: 700px; 
			}

			.about-background-1 {
				background-image: url("images/gallery-photos/Carousel_1.jpg");
			    background-position: center;
			    background-repeat: no-repeat;
			    background-size: cover;
				height: 50%;
				opacity: 0.7;
			}

		</style>
	</head>
	<body>
		<!-- Navbar -->
		<div id="navbar" style="padding: 0px 0px;">
			<ul id="navbarMenu">
			  <li>
			  	<a href="index.php" >Home</a>
			  </li>
			  <li>
			  	<a href="gallery.php">Gallery</a>
			  </li>
			  <li>
			  	<a href="blog.php">Blog</a>
			  </li>
			  <li>
			  	<a class="active" href="#">About Me</a>
			  </li>
			  <li style="float: right;">
			  	<a href="letstalk.php">Let's Talk</a>
			  </li>
			</ul>
		</div>

		<!-- Header -->
		<div class="container">
			<div class="page-header">
				<h1 style="margin-top: 100px;">
					About me
				</h1>
				<hr>
			</div>
		</div>

		<!-- Walk with me -->
		<div class="container">
			<div class="row">
				<div id="followme">
					<h2 class="inline-block">Walk with me</h2>
				</div>
				<img id="followperson" class="tossing person inline-block" src="images/commentor.png" style="height: 50px; position: relative; top: 145px; left: 19%;">
			</div>
		</div>

		<div class="container about-container-1">
			<div class="about-background-1">
			<h2 class="textheader1">Who am I?</h2>
			<p class="textbody1" style="float: right; margin-left: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet ligula a elit sodales rhoncus. Praesent egestas felis sed diam vestibulum, quis scelerisque neque ultrices. Ut tincidunt ante venenatis velit laoreet, ut placerat eros fringilla. Duis vitae massa quam. Nullam libero justo, hendrerit et turpis vel, vulputate efficitur elit. Proin quis purus faucibus eros vestibulum fermentum. Sed et elit ac quam tempus ultricies. Maecenas fermentum diam ac consequat accumsan. Vestibulum suscipit facilisis iaculis.

Sed at rutrum lectus. Etiam luctus lorem mi, convallis vehicula diam sagittis sit amet. Fusce venenatis, purus ut varius fermentum, nisi orci vehicula ligula, et pellentesque libero dui at neque. Fusce id elit in mi suscipit viverra at eu ante. Sed ut suscipit mauris. Morbi at consequat metus, elementum iaculis orci. Phasellus feugiat sit amet sem sed fermentum. Mauris volutpat magna ut convallis scelerisque. Donec ac velit nisi. Vivamus et aliquet purus. Morbi commodo neque quis nulla sollicitudin ultrices.

Quisque a facilisis augue. Nulla imperdiet sodales orci, eget ullamcorper libero consequat vitae. Aenean sodales metus nunc, eu fermentum elit bibendum at. Fusce ligula lacus, porttitor at congue eu, auctor ut odio. Aliquam dapibus luctus est id pharetra. Nunc ultrices sem eu lacus rutrum, sit amet euismod felis sagittis. Pellentesque in molestie tellus. Mauris sed ipsum ut nunc rutrum tincidunt. Sed sagittis elit eu quam dapibus fringilla.

Proin in nunc et erat condimentum gravida vitae id ante. Etiam vehicula aliquam vestibulum. Maecenas tempor quam lectus, a congue lectus varius ullamcorper. Vestibulum augue turpis, volutpat nec risus sit amet, dignissim mollis dolor. Duis at auctor nibh, quis tincidunt est. Curabitur in cursus felis. Suspendisse potenti. Sed auctor maximus neque, in condimentum urna rhoncus quis.

Fusce interdum sagittis magna, et mollis purus lacinia quis. Curabitur in mi varius, scelerisque elit sit amet, sollicitudin ante. Fusce sollicitudin neque justo, ac ornare tellus molestie non. Etiam magna est, tincidunt suscipit tincidunt vitae, placerat eget neque. Morbi eget viverra purus. Mauris eget libero sit amet leo tincidunt dignissim at nec felis. Nulla id condimentum massa.</p>
		</div>
		</div>
	</body>
</html>