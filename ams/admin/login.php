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
				<div class="logo">
					<!--<img src="assets/images/logo.png">-->
				</div>
				<div class="box-login">
					<div class="panel-red" style="border-radius:6px;">
						<div class="row">
							<div class="col-md-2">
								<div class="col-md-2"> </div>
								<div class="col-md-10">
									<img src="assets/images/avatar-1-xl.jpg" />
								</div>
							</div>
							<div class="col-md-10">
								<h3 class="center">RVCE Attendance Management System</h3>
								<h3 class="center">Sign in as Administrator</h3>
							</div>
						</div>
					</div>
					<br />
					<h4 class="center">
						Please enter the Department ID and password to log in.
					</h4>
					<form class="form-login" action="login_confirm.php" method="post">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> Department or Password is wrong. Please try again.
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Department ID">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
								</span>
							</div>
							<div class="form-actions" align="center">
								<div class = "row">
									<div class="col-sm-3"> </div>
									<div class = "col-sm-3">
										<button type="button" class="btn btn-green">
											<a href = "../index.php" style = "color:white;">Back <i class="fa fa-arrow-circle-left"></i></a>
										</button>
									</div>
									
									<div class = "col-sm-3">
										<button type="submit" class="btn btn-green">
											Login <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
									<div class="col-sm-3"> </div>
								</div>
							</div>

						</fieldset>
					</form>
					<div class="copyright">
						2015 &copy; RVCE Attendance Management System by ISE
					</div>
				</div>
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
	</body>
</html>