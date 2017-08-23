<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

		<!-- jQuery, Tether, Popper, Boostrap JS -->
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Other Scripts -->
		<script type="text/javascript">
			//Onload function
			$(document).ready(function() {
				$("#logofade").delay(500).animate({ opacity: 1 }, 1000);
				$("#title").delay(1000).animate({ opacity: 1 }, 1000);
				$("#instaline").delay(1000).animate({ opacity: 1 }, 1000);
			});

		</script>

		<!-- CSS -->
		<style type="text/css">
			#logofade {
				opacity: 0;
				width: 400px;
				margin-top: 200px;
			}
		</style>
	</head>
	<body>
		<div style="text-align: center; ">
			<img src="images/logo-bw-full.png" id="logofade">
			<br>
			<h2 id="title" style="opacity: 0;"><font face="lucida console">Coming soon!</font></h2>
			<h2 id="instaline" style="opacity: 0;"><font face="lucida console">until then, check me out on my insta -> </font><a  href="https://www.instagram.com/2jmovingpictures/?hl=en" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></h2>
		</div>

	</body>
</html>