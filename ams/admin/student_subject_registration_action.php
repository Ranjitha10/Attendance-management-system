<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION["admin"])==false) 
	{
		$_SESSION['login'] = "false";
		header("Location: ../index.php");
	}
	else if ($_SESSION["admin"]==false) 
	{
		$_SESSION['login'] = "false";
		header("Location: ../index.php");
	}
?>
<html lang="en">
	<head>
		<title>Admin - Student-Subject Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
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
									<img src="assets/images/avatar-1-small.jpg" class="img-circle" alt=""> <span class="username hidden-xs"><?php
									echo $_SESSION['username'];
									?>
								</span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="view_details_admin.php">
											My Profile
										</a>
									</li>
									<li>
										<a href="lock_screen.php">
											Lock Screen
										</a>
									</li>
									<li>
										<a href="logout.php">
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
								<img src="assets/images/avatar-1.jpg" class="img-circle" alt="">
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Welcome </h5>
								<h4 class="no-margin">
									<?php
										echo $_SESSION['username'];
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
								<a href="javascript:void(0)"><i class="fa fa-check-square-o"></i> <span class="title"> Attendance </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="javascript:void(0)">
											<span class="title"> View Attendance <i class="fa fa-chevron-down pull-right"></i></span>
											<ul class="sub-menu">
												<li>
													<a href="view_student_attendance.php">
														<span class="title"> Student Attendance</span>
													</a>
												</li>

												<li>
													<a href="view_class_attendance.php">
														<span class="title"> Class Attendance </span>
													</a>
												</li>
											</ul>	
										</a>
									</li>
									<li>
										<a href="edit_attendance.php">
											<span class="title"> Edit Attendance </span>
										</a>
									</li>
									<li>
										<a href="generate_nsar_list.php">
											<span class="title"> Generate NSAR List </span>
										</a>
									</li>
								</ul>
							</li>




							



							<li>
								<a href="javascript:void(0)"><i class="fa fa-calendar"></i> <span class="title"> Timetable </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="add_timetable.php">
											<span class="title"> Upload New Timetable</span>
										</a>
									</li>
									
								</ul>
							</li>



							<li>
								<a href="javascript:void(0)"><i class="fa fa-plus-square-o"></i> <span class="title"> New Additions </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									
									<li>
										<a href="javascript:void(0)">
											<span class="title"> Add New Staff </span><i class="fa fa-chevron-down pull-right"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="add_staff_excel.php">
													<span class="title"> Upload as Excel </span>
												</a>
											</li>
											<li>
												<a href="add_staff_form.php">
													<span class="title"> Enter Manually </span>
												</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="javascript:void(0)">
											<span class="title"> Add New Student </span><i class="fa fa-chevron-down pull-right"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="add_student_excel.php">
													<span class="title"> Upload as Excel </span>
												</a>
											</li>
											<li>
												<a href="add_student_form.php">
													<span class="title"> Enter Manually </span>
												</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="add_subject.php">
											<span class="title"> Add New Subject/Change Scheme </span>
										</a>
									</li>
                                    <li>
										<a href="add_subject_staff.php">
											<span class="title"> Assign Faculty to Subjects </span>
										</a>
									</li>
									
								</ul>
							</li>

							<li>
								<a href="student_subject_registration.php"><i class="fa fa-file-text-o"></i> <span class="title"> Student Registration </span></i> </a>
							</li>



							<li>
								<a href="javascript:void(0)"><i class="fa fa-table"></i> <span class="title"> Consolidated Reports </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="attendance_report.php">
											<span class="title"> Consolidated Attendance </span>
										</a>
									</li>
									
								</ul>
							</li>


							<li>
								<a href="javascript:void(0)"><i class="fa fa-signal"></i> <span class="title"> Charts </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="attendance_chart.php">
											<span class="title"> Attendance </span>
										</a>
									</li>
									
								</ul>
							</li>

							

						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						<a class="btn btn-sm status" href="#">
							Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
						</a>
					</div>
					<div class="col-xs-6 text-right no-padding">
						<a class="btn btn-sm log-out text-right" href="logout.php">
							<i class="fa fa-power-off"></i> Log Out
						</a>
					</div>
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
									<h1>Registered Students<small>Registration Details</small></h1>
								</div>
							</div>
							<div class="col-sm-6" style="color:#336699;">
								<div class="col-sm-2">
									<img src="assets/images/avatar-1.jpg" height="77" />
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
						
						<?php
							$allowedExts = array('xls' ,'xlsx' ,'Excel5' , 'Excel2003XML' , 'Excel2007' ,'Excel' ,'Excel2010');
							$temp = explode(".", $_FILES["file"]["name"]);
							$extension = end($temp);
							$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);	

							if( (($ext=="xls") || ($ext=="xlsx")) && in_array($extension, $allowedExts) )
							{
								if ($_FILES["file"]["error"] > 0)
								{
									echo "Error: " . $_FILES["file"]["error"] . "<br>";
								}
								else
								{
									$excel_readers = array('Excel5' ,'Excel','Excel2003XML' , 'Excel2007' ,'Excel2010');
									define("UPLOAD_DIR", "uploads/student_subject/");
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
										while (file_exists(UPLOAD_DIR . $name))
										{
											$i++;
											$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
										}
													 
										$success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $name);
										if (!$success) 
										{ 
											echo "<h2><small>Unable to save file.</small></h2>";
											exit;
										}

										chmod(UPLOAD_DIR . $name, 0644);
										require_once('../Library/PHPExcel.php');
										if($ext == "xls") $reader = PHPExcel_IOFactory::createReader('Excel5');
										else $reader = PHPExcel_IOFactory::createReader('Excel2007');
										$reader->setReadDataOnly(true);
										
										$path = UPLOAD_DIR . $name;
										$excel = $reader->load($path);
													 
										$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
										$writer->save('data.csv');


										function readCSV($csvFile)
										{
											$file_handle = fopen($csvFile, 'r');
											while (!feof($file_handle) )
											{
												$line_of_text[] = fgetcsv($file_handle, 1024);
											}
											fclose($file_handle);
											return $line_of_text;
										}
										$csvFile = 'data.csv';
										$data = readCSV($csvFile);
										$con = mysqli_connect("localhost","root","root","attendance");

										$acad = $_POST["acad"];
										$sem = $_POST["sem"];
										$sem_type = $_POST["sem_type"];
										
										$row = 0;
										foreach($data as $fields) $row++;

										$column = count($data[0]);

										$ct = 0;
										$sub = array();
										$x = $y = 0;
										$unsuccessful = array();
										$suceessful = array();

										for($i = 1; $i < $row; $i++)
										{
											if($data[$i][0] == "") continue;
											$usn = $data[$i][0];
											for($k = 1; $k < $column;  $k ++)
											{
												$sub = $data[$i][$k];
												if( $sub == "") continue;
												$sql = 'Select * from subject where sub_id like "'.$sub.'" ';
												$res = mysqli_query($con,$sql);
												if( !$res )
												{
													$unsuccessful[$x][0] = $usn;
													$unsuccessful[$x++][1] = $sub;
													continue;
												}
												$sql = 'Select * from student where usn like "'.$usn.'" ';
												$res = mysqli_query($con,$sql);
												if( !$res )
												{
													$unsuccessful[$x][0] = $usn;
													$unsuccessful[$x++][1] = $sub;
													continue;
												}
												$sql = 'Select * from student_subject where usn like "'.$usn.'" && sub_id like "'.$sub.'" && acad_year like  "'.$acad.'" && semester like "'.$sem.'" && semester_type like "'.$sem_type.'" ';
												$res = mysqli_query($con,$sql);
												$a = mysqli_fetch_array($res);
												if( $a[0] != "" )
												{
													$unsuccessful[$x][0] = $usn;
													$unsuccessful[$x++][1] = $sub;
													continue;
												}
												$successful[$y][0] = $usn;
												$successful[$y++][1] = $sub;
												$sql = 'insert into student_subject values( "'.$usn.'" , "'.$sub.'" , "'.$acad.'" , "'.$sem.'" , "'.$sem_type.'" ) ';
												mysqli_query($con,$sql);
												echo mysqli_error($con);
											}
										}

										echo '<div class="row"><div class="col-sm-2"></div><div class="col-sm-8"><div class="panel panel-white"><div class="panel-body">';

										//echo '<br/>';

										if( $y==0 )
										{
											
										}

										else
										{
											//echo $j;
											echo '<h3 class="center">';
												echo 'Student - Subject Data Uploaded Successfully';
											echo '</h3>';
											echo '<table class="table table-striped table-bordered table-hover table-full-width"> ';
												echo '<thead><tr>';
													echo '<th>Sl No.</th>';
													echo '<th>USN</th>';
													echo '<th>Subject Code</th>';
												echo '</tr></thead>';
												echo '<tbody>';
													for($i=0;$i<$y;$i++) 
													{	echo '<tr> <td>';
														echo $i+1;
														echo '</td><td>';
														echo $successful[$i][0];
														echo '</td> <td>';
														echo $successful[$i][1];
														echo '</td> </tr>';
													}
												echo '</tbody>';
											echo '</table>';
											echo '<hr/>';
										}

										
										//echo '<br/>';

										if( $x==0 )
										{

										}

										else
										{
											echo '<h3 class="center">';
												echo 'Student - Subject Data Not Uploaded </h3>';
											echo '<h4 class="center">';
											echo '(Wrong USN or Subject ID or Student already registered)</h4>' ;
											echo '<table class="table table-striped table-bordered table-hover table-full-width"> ';
												echo '<thead><tr>';
													echo '<th>Sl No.</th>';
													echo '<th>USN</th>';
													echo '<th>Subject Code</th>';
												echo '</tr></thead>';
												echo '<tbody>';
													for($i=0;$i<$x;$i++) 
													{	echo '<tr> <td>';
														echo $i+1;
														echo '</td> <td>';
														echo $unsuccessful[$i][0];
														echo '</td> <td>';
														echo $unsuccessful[$i][1];
														echo '</td> </tr>';
													}
												echo '</tbody>';
											echo '</table>';
											echo '<hr/>';
										}
										
										echo '<h3 class = "center"><a class="button center" href="student_subject_registration.php">Back to Upload Page</a></h3>';
										echo '</div></div></div>';

										mysqli_close($con);
										unlink($csvFile);

									}
								}
								
								
							}
							else
							{
								echo '<div class="row"><div class="col-sm-2"></div><div class="col-sm-8"><div class="panel panel-white"><div class="panel-body">';
								echo '<h3 class = "center">Wrong Format Uploaded <br><br> <a class="button center" href="student_subject_registration.php">Back to Upload Page</a></h3>';
								echo '</div></div></div>';

							}
						?>

						
						<!-- end: PAGE CONTENT-->
					</div>
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
						2015 &copy; RVCE Attendance Managament System by ISE
					</div>
					
			</footer>
			<!-- end: FOOTER -->
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
			<!-- *** READ NOTE *** -->
			<div id="readNote">
			
			
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
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/table-data.js"></script>
		<script src="assets/plugins/mixitup/src/jquery.mixitup.js"></script>
		<script src="assets/plugins/lightbox2/js/lightbox.min.js"></script>
		<script src="assets/js/pages-gallery.js"></script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				//Index.init();
				FormElements.init();
				Calendar.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>