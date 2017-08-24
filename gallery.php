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

		</script>

		<!-- CSS -->
		<style type="text/css">
			body {
				margin: 0px;
				padding: 0px;
			}

			#navbarMenu {
			    list-style-type: none;
			    margin: 0px;
			    padding: 0px;
			    overflow: hidden;
			    background-color: #333;
			    position: fixed;
			    top: 0;
			    width: 100%;
			}

			#navbarMenu li {
			    float: left;
			    margin: 0px 10px;
			}

			#navbarMenu li a {
			    display: block;
			    color: white;
			    text-align: center;
			    padding: 14px 16px;
			    text-decoration: none;
			    font-family: "Lucida Console";
			}

			#navbarMenu li a:hover:not(.active) {
			    background-color: #111;
			}

			#navbarMenu li .active {
			    background-color: #4CAF50;
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
		<div id="navbar" class="w3-container" style="padding: 0px 0px;">
			<ul id="navbarMenu" class="w3-center w3-animate-top">
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
			<img src="images/commentor.png" style="height: 50px;">
		</div>
	</body>
</html>