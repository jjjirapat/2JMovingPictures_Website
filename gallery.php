<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gallery</title>
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
				});

			function walkAnimate() {
				var x = Math.floor((Math.random() * 10) + 1);
				var id = Math.floor(((Math.random() * 10) + 1)/2);
				var rng = Math.floor((Math.random() * 100) + x);
				if(0 < rng >= 20) {
					$('#person'+id)
						.delay(1000)
						.animate({ left: "+=10px", top: "+=10px" }, '50');
				}else if(20 < rng >= 40) {
					$('#person'+id)
						.delay(1000)
						.animate({ left: "+=10px", top: "-=10px" }, '50');
				}else if(40 < rng >= 80) {
					$('#person'+id)
						.delay(1000)
						.animate({ left: "-=10px", top: "+=10px" }, '50');
				}else if(80 < rng >= 100) {
					$('#person'+id)
						.delay(1000)
						.animate({ left: "-=10px", top: "-=10px" }, '50');
				}else if(rng == 5) {
				}
				walkAnimate();
			}

		</script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">
			.person {
				 animation-duration: .7s;
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
			  	<a class="active" href="#gallery">Gallery</a>
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
		<div class="container-fluid" style="margin-top: 100px; text-align: center;">
			<h1>
				Welcome to the Gallery!
			</h1>
			<img id="person1" class="tossing" src="images/commentor.png" style="height: 50px; position: relative;">
			<img id="person2" class="tossing" src="images/commentor.png" style="height: 50px; position: relative;">
			<img id="person3" class="tossing" src="images/commentor.png" style="height: 50px; position: relative;">
			<img id="person4" class="tossing" src="images/commentor.png" style="height: 50px; position: relative;">
			<img id="person5" class="tossing" src="images/commentor.png" style="height: 50px; position: relative;">
		</div>
	</body>
</html>