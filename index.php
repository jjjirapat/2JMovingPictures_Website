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
				$('#welcomeTitle1')
					.delay(1000)
					.animate({ opacity: 1 }, 1000)
					.delay(2000)
					.animate({ left: "-=1000px", }, 'slow')
					.delay(1000)
					.animate({ left: "+=1000px" }, 'slow');
				$('#welcomeTitle2')
					.delay(2000)
					.animate({ opacity: 1 }, 1000)
					.delay(1000)
					.animate({ left: "+=1200px", }, 'slow');
					
			});

			function changeWelcome() {
				clearTimeout(timeout);
				var timeout = setTimeout(function() {
					$('#welcomeTitle1').html('testing one two test');
				}, 2000);
			}

		</script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">

			.welcomeTitle {
				opacity: 0;
				position: relative;
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
		<div id="navbar" class="w3-container" style="padding: 0px 0px;">
			<ul id="navbarMenu" class="w3-center w3-animate-top">
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
		<div class="container-fluid">
			<div style="text-align: center; margin-top: 350px;">
				<h1 class="welcomeTitle" id="welcomeTitle1">Hello!</h1>
				<h1 class="welcomeTitle" id="welcomeTitle2">I'm glad you could make it.</h1>
			</div>
		</div>
		<div class="container-fluid">
			<div style="text-align: center; margin-top: 350px; position: absolute;">
				<h1>This is a test!</h1>
				<h1>This is also a test!</h1>
			</div>
		</div>
	</body>
</html>