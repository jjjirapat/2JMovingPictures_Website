<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Let's talk</title>
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
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">
			input[type=text] {
			    width: 100%;
			    padding: 12px 20px;
			    margin: 8px 0;
			    box-sizing: border-box;
			    border: 3px solid #ccc;
    			border-radius: 4px;
			    -webkit-transition: 0.5s;
			    transition: 0.5s;
			    outline: none;
			}

			input[type=text]:focus {
			    border: 3px solid #2255a5;
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
			  	<a href="aboutme.php">About Me</a>
			  </li>
			  <li style="float: right;">
			  	<a class="active" href="#letstalk">Let's Talk<font></a>
			  </li>
			</ul>
		</div>
		<div class="container-fluid">
			<h1  style="margin-top: 100px;"><font face="lucida console">
				Let's talk
			<font></h1>
			<form>
	  			<label for="fname" style="margin-bottom: 0px;">Name</label>
				<input type="text" id="fname" name="fname" placeholder="" style="margin-top: 0px;">
	  			<label for="fname" style="margin-bottom: 0px;">Email</label>
				<input type="text" id="lname" name="lname" placeholder="" style="margin-top: 0px;">
			</form>
		</div>
	</body>
</html>