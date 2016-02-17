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
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Student Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />

		<link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">

		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css">
		<link rel="stylesheet" href="assets/plugins/x-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="assets/plugins/typeaheadjs/lib/typeahead.js-bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/jquery-address/address.css">
		<link rel="stylesheet" href="assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css">
		<link rel="stylesheet" href="assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css">

		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="assets/css/plugins/animate/animate.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>

		<link rel="stylesheet" href="assets/plugins/lightbox2/css/lightbox.css">
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<link rel="stylesheet" href="assets/css/plugins/animate/animate.css">
		<link rel="stylesheet" href="assets/css/themes/theme-style7.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<div class="main-wrapper">
			<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->
						<div class="navbar-brand center">
							<!-- <img src="assets/images/logo.png" alt="Attendance Management System"/> -->
							RVCE ATTENDANCE MANAGMENT SYSTEM
						</div>
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<?php 
									$pic=$_SESSION["username"];
									$path = "profile/" . $pic .".png";
									//echo $path;
									$alt_path = "profile/avatar-1.jpg";
									//echo $alt_path;
									if(file_exists($path) )
										echo " <img src=\"$path\" class=\"img-circle\" height=\"30\" width=\"30\" /> "; 
									else
										echo '<img src="profile/avatar-1-small.jpg" class="img-circle" height="30" width="30" />' ; 
									?> 

									<span class="username hidden-xs">
									<?php
									echo $_SESSION['username'];
									?>
								</span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="home.php">
											My Profile
										</a>
									</li>
									<li>
										<a href="lock_screen.php">
											Lock Screen
										</a>
									</li>
									<li>
										<a href="../logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>
			<!-- end: TOPBAR -->
			<!-- start: PAGESLIDE LEFT -->
			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							<a href="#main-navbar" class="sb-toggle-left">
							</a>
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
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
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Welcome </h5>
								<h4 class="no-margin">
									<?php
										$con = mysqli_connect("localhost","root","root","attendance");
										$q = 'select name from student where usn = "'. $_SESSION['username'] .'"';
										$r = mysqli_query($con,$q);
										$row = mysqli_fetch_array($r);
										echo $row['name'];
										$username = $row['name'];
									?>
								</h4>
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li class="active open center">
								<a href="home.php"><i class="fa fa-home"></i> <span class="title"> Home </span></a>
							</li>

							<li>
								<a href="view_attendance.php"><i class="fa fa-check-square-o"></i> <span class="title"> View Attendance </span></a>
							</li>

							
							
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				
			</nav>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-4 hidden-xs">
								<div class="page-header">
									<h1>Home Page <small>Profile </small></h1>
								</div>
							</div>
							<div class="col-sm-6" style="color:#336699;">
								<div class="col-sm-2">
									<img src="assets/images/avatar-1.jpg" height="77"/>
								</div>
								<div class="col-sm-10">
									<h5>Rashtreeya Sikshana Samithi Trust</h5>
									<h4><b>R V College of Engineering</b></h4>
									<h6>Mysore Road, RV Vidyaniketan Post, Bangalore - 560 059</h6>
								</div>
							</div>
							<div class="col-sm-2 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									<!-- start: TOP NAVIGATION MENU -->
									<ul class="nav navbar-right">
										<!-- start: TO-DO DROPDOWN -->
										
									</ul>
									<!-- end: TOP NAVIGATION MENU -->
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: PAGE CONTENT -->
						<br/>
						<br/>

						<!-- <div class="row">
							<div class="col-sm-12">
								<h1 class="center animated bounceInRight text-extra-large text-red">Welcome <?php echo $username; ?></h1>
							</div>
						</div> -->

						<br/>
						<br/>
						<div class="panel-body">
							<form method="POST" id="my_from" class="form-inline" action="edit_profile_action.php">
								
								<div class="col-sm-2"></div>
								<div class="col-sm-8">

									<div class="panel panel-white">
									<div class="panel-body">

									<?php

									$allowedExts = array('jpg', 'png', 'bmp', 'gif');
									$temp = explode(".", $_FILES["file"]["name"]);
									$extension = end($temp);
									$extension = strtolower($extension);
									$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);	

									if(in_array($extension, $allowedExts) )
									{
										if ($_FILES["file"]["error"] > 0)
										{
											echo "Error: " . $_FILES["file"]["error"] . "<br>";
										}
										else
										{
											//$excel_readers = array('Excel5' ,'Excel','Excel2003XML' , 'Excel2007' ,'Excel2010');
											define("UPLOAD_DIR", "profile/");
											if (!empty($_FILES["file"]))
											{
												$myFile = $_FILES["file"];
												if ($myFile["error"] !== UPLOAD_ERR_OK)
												{
													echo "An error occurred.";
													exit;
												}
												$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
															 
												$i = 0;
												$parts = pathinfo($name);
												$name = $_SESSION['username'] . "." . "png";
												

												$success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $name);
												if (!$success) 
												{ 
													echo "<h2><small>Unable to save file.</small></h2>";
													exit;
												}

												chmod(UPLOAD_DIR . $name, 0644);
											}
										}
									}?>
									<?php

									//$name = $_POST['name'];
									$usn = $_SESSION["username"];
									//$dep = $_POST['department'];
									$email = $_POST['email'];
									$mob = $_POST['phone'];
									$addr = $_POST['address'];

									$father_phone = $_POST['f_phone'];
									$father_email = $_POST['f_email'];

									

									$con = mysqli_connect("localhost","root","root","attendance");
									$sql = ' UPDATE student SET email="'.$email.'" , phone="'.$mob.'" , address="'.$addr.'" , father_phone="'.$father_phone.'" , father_email="'.$father_email.'" , WHERE usn="'.$usn.'" ';
									$query = mysqli_query($con, $sql);

									if($query)
									{

										echo "<h3 align=\"center\"> SUCCESSFULLY UPDATED!</h3>";

										echo '<table class="table table-striped table-full-width table-bordered"> ';

										echo "<tr>";
										echo "<td>USN</td>";
										echo "<td>$usn</td>";
										echo "</tr>";

										echo "<tr>";
										echo "<td>Email</td>";
										echo "<td>$email</td>";
										echo "</tr>";

										echo "<tr>";
										echo "<td>Phone</td>";
										echo "<td>$mob</td>";
										echo "</tr>";

										echo "<tr>";
										echo "<td>Address</td>";
										echo "<td>$addr</td>";
										echo "</tr>";

										echo "<tr>";
										echo "<td>Father Phone</td>";
										echo "<td>$father_phone</td>";
										echo "</tr>";

										echo "<tr>";
										echo "<td>Father email</td>";
										echo "<td>$father_email</td>";
										echo "</tr>";

																

										echo '</table>';

									}

									else
									{
										echo "<h3> UPDATE FAILED. TRY AGAIN!</h3>";
									}
								
									?>
				
									<h2 align="center"><a href="edit_profile.php">Back to previous page</a></h2>
									</div>
									</div>
						</div>
						<div class="col-sm-2"></div>
					</form>
						</div>
						<!-- end: PAGE CONTENT-->
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<!-- start: FOOTER -->
			<footer class="inner">
				<div class="footer-inner">
					<div class="pull-left">
						2015 &copy; Attendance Managament System by ISE.
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="fa fa-chevron-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
			
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/moment/min/moment.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/js/subview.js"></script>
		<script src="assets/js/subview-examples.js"></script>
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		<script src="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/pages-calendar.js"></script>
		<script src="assets/js/ui-animations.js"></script>

		<script src="assets/plugins/mixitup/src/jquery.mixitup.js"></script>
		<script src="assets/plugins/lightbox2/js/lightbox.min.js"></script>
		<script src="assets/js/pages-gallery.js"></script>

		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
		<script src="assets/plugins/typeaheadjs/typeaheadjs.js"></script>
		<script src="assets/plugins/typeaheadjs/lib/typeahead.js"></script>
		<script src="assets/plugins/jquery-address/address.js"></script>
		<script src="assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js"></script>
		<script src="assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5.js"></script>
		<script src="assets/plugins/wysihtml5/wysihtml5.js"></script>
		<script src="assets/plugins/x-editable/demo-mock.js"></script>
		<script src="assets/plugins/x-editable/demo.js"></script>


		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				//Index.init();
				//FormElements.init();
				Calendar.init();
				PagesGallery.init();
				Animation.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>