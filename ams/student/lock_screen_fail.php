<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Lock Screen</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="lock-screen">
		<?php
			session_start();
			if (isset($_SESSION["student"])==false) 
			{
				$_SESSION['login'] = "false";
				header("Location: ../index.php");
			}
			else if ($_SESSION["student"]==false) 
			{
				$_SESSION['login'] = "false";
				header("Location: ../index.php");
			}
		?>
		<div class="main-ls animated flipInX">
			<div class="box-ls">
				<?php 
					$pic=$_SESSION["username"];
					$path = "profile/" . $pic .".png";
					//echo $path;
					$alt_path = "profile/avatar-1.jpg";
					//echo $alt_path;
					if(file_exists($path) )
						echo " <img src=\"$path\" class=\"img-circle\" height=\"100\" width=\"100\" /> "; 
					else
						echo '<img src="profile/avatar-1.jpg" class="img-circle" height="100" width="100" />' ; 
				?>
				<div class="user-info">
					<h1><i class="fa fa-lock"></i>
					<?php
						echo $_SESSION['username'];
					?>
					</h1>
					<span><em>Please enter your password to un-lock.</em></span>
					<form action="lock_screen_action.php" method="post">
						<div class="errorHandler alert alert-danger">
							<i class="fa fa-remove-sign"></i> Password is wrong. Please try again.
						</div>
						<div class="input-group">
							<input type="password" name="password" placeholder="Password" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-green" type="submit">
									<i class="fa fa-chevron-right"></i>
								</button> </span>
						</div>
						<div class="relogin">
							<a href="../logout.php">
								Another Login</a>
						</div>
					</form>
				</div>
			</div>
			<div class="copyright">
				2015 &copy; Attendance Managament System by ISE.
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>