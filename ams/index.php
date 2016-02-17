<!DOCTYPE html>
<html lang="en" class="no-js">

	<head>
		<title>Login - Attendance Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
	</head>
   
<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="box-login">
					<div class="panel-pink" style="border-radius:6px;">
						<div class="row">
							<div class="col-md-2">
								<div class="col-md-2"> </div>
								<div class="col-md-10">
									<img src="assets/images/avatar-1-xl.jpg" />
								</div>
							</div>
							<div class="col-md-10">
								<h3 class="center">RVCE Attendance Management System</h3>
								<h3 class="center">Select The User Type</h3>
						  </div>
						</div>
					</div>
					<hr/>
					<form action="admin/login.php" class="form">
						<button type="submit" class="btn btn-red btn-block center"><i class="fa fa-user"></i> Administrator</button>
					</form>
					<hr/>
					<form action="staff/login.php" class="form">
						<button type="submit" class="btn btn-green btn-block center"><i class="fa fa-user"></i> Staff</button>
					</form>
					<hr/>
					<form action="student/login.php" class="form">
						<button type="submit" class="btn btn-orange btn-block center"><i class="fa fa-user"></i> Student</button>
					</form>
					<br/>
					<div class="copyright">
						2015 &copy; Attendance Managament System by ISE.
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id = "invalid">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">
								×
							</button>
							<h4 id="myLargeModalLabel" class="modal-title">Unauthorised User</h4>
						</div>
						<div class="modal-body">
							<p>
								You have not logged in to access that page. Please login here!
							</p>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
			</div>
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id = "logout">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">
								×
							</button>
							<h4 id="myLargeModalLabel" class="modal-title">Logged Out</h4>
						</div>
						<div class="modal-body">
							<p>
								You have been logged out. Please login here!
							</p>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
			</div>
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	<?php
			
			if(isset($_SESSION['login']) && $_SESSION['login']=="false")
			{
				echo "<script>jQuery(document).ready(function() {
						$(\"#invalid\").modal('show');
					});</script>";
				unset($_SESSION['login']);
			}
			if(isset($_SESSION['logout']) && $_SESSION['logout']=="true")
			{
				echo "<script>jQuery(document).ready(function() {
						$(\"#logout\").modal('show');
					});</script>";
				unset($_SESSION['logout']);
			}
		?>
</body>
</html>