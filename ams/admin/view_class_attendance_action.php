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
		<title>Admin - Class Attendance</title>
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
									

									
							<li>
                            
								<a href="student_subject_registration.php"><i class="fa fa-file-text-o"></i> <span class="title"> Student Registration </span></i> </a>
                                <ul class="sub-menu">
							</li>
									
								</ul>
							



							<li>
								<a href="javascript:void(0)"><i class="fa fa-table"></i> <span class="title"> Consolidated Reports </span><i class="fa fa-chevron-down pull-right"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="attendance_report.php">
											<span class="title"> Consolidated Attendance </span>
										</a>
									</li>
									<li>
										
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
									<h1>Class Attendance<small>Attendance Details</small></h1>
								</div>
							</div>
						<div class="col-sm-6" style="color:#336699;">
								<div class="col-sm-2">
									<img src="assets/images/avatar-1.jpg" height="77" />
								</div>
								<div class="col-sm-10">
									
									<h4><b>R V College of Engineering</b></h4>
									<h6>Mysore Road, RV Vidyaniketan Post, Bangalore - 560 059</h6>
								</div>
						  </div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: PAGE CONTENT -->
						<?php
							$user = $_SESSION['username'];
							$year = $_POST['acad_year'];
							$sem = $_POST['sem'];
							$sem_type = $_POST['sem_type'];
							$s="";
							if($sem_type==1)
							{
								$s = "Odd";
							}
							else if($sem_type==2)
							{
								$s = "Even";
							}
							else if($sem_type==3)
							{
								$s = "Fast Track";
							}
							$sub = $_POST['sub_id'];
							$con = mysqli_connect("localhost", "root", "root","attendance");
							$qry = 'select * from subject where sub_id = "'.$sub.'" ';
							$res = mysqli_query($con,$qry);
						?>
						<br/>
						<br/>
						<div class="row" style="font-size:15px">
							<div class="col-sm-1">
							</div>
							<div class="col-sm-10">
								<div class="panel panel-white">
									<div class="panel-body">
										<?php
											if(mysqli_num_rows($res)==0)
											{
												echo '<h3 class="center">Invalid subject ID: '. $sub .'</h3>';
												echo '<h3 class = "center"><a class="button center" href="view_class_attendance.php">Back to View Class Attendance page</a></h3>';
											}
											else
											{
												$row = mysqli_fetch_array($res);
												$query = 'select * from subject where sub_id = "'. $sub .'"';
												$result = mysqli_query($con,$query);
												$r = mysqli_fetch_array($result);
												$sub_name = $r['name'];
												echo '<div class = "row">';
													echo '<div class = "col-sm-4">';
													echo 'Academic year: ' . $year;
													echo '</div>';	

													echo '<div class = "col-sm-4">';
													echo 'Semester: ' . $sem;
													echo '</div>';

													echo '<div class = "col-sm-4">';
													echo 'Semester Type: ' . $s;
													echo '</div>';

												echo '</div>';
												echo '<div class = "row">';
													echo '<div class = "col-sm-4">';
													echo 'Subject ID: ' . $sub;
													echo '</div>';	

													echo '<div class = "col-sm-4">';
													echo 'Subject Name: ' . $sub_name;
													echo '</div>';

													echo '<div class = "col-sm-4"><span style="color:red;">';
													echo '* Red indicates low attendance';
													echo '</span></div>';

												echo '</div>';
												echo '<br/>';
												echo '<table class="table table-striped table-bordered table-hover table-full-width"> ';
												echo '<thead><tr>';
												echo '<th>USN</th>';
												echo '<th>Student Name</th>';
												echo '<th>Classes Attended</th>';
												echo '<th>Classes Held</th>';
												echo '<th>Percentage</th>';
												echo '</tr></thead><tbody>';


												$q1 = 'select * from student_subject where acad_year = "'.$year.'" and semester = '.$sem.' and semester_type = "'.$sem_type.'" and sub_id = "'.$sub.'" ';
												$res1 = mysqli_query($con,$q1);
												//echo $q1;
												while($row1 = mysqli_fetch_array($res1))
												{
													$held = 0;
													$attended = 0;
													$usn = $row1['usn'];
													$q2 = 'select * from attendance where sub_id = "'. $sub .'" and acad_year = "'.$year.'" and semester = "'.$sem.'" and semester_type = "'.$sem_type.'" and usn = "'.$usn.'" ';
													$res2 = mysqli_query($con,$q2);
													$index = 0;
													$name = "";
													while($row2 = mysqli_fetch_array($res2))
													{
														$name = $row2['name'];
														$held++;
														if($row2['status']==1)
														{
															$attended++;
														}
														else
														{
															$leave[$index] = $row2['class_date'];
															$index++; 
														}
													}
													if($held!=0)
													{
														$p = ($attended/$held)*100;
													}
													else
													{
														$p = 0;
													}
													$per = sprintf("%.2f",$p);
										            if($per<75)
										            {
										              $col = "red";
										            }
										            else
										            {
										              $col = "black";
										            }

										            echo '<tr>';
										            echo '<td>'. $usn .'</td>'; 
										            echo '<td>'. $name .'</td>';
										            echo '<td>'. $attended .'</td>';
										            echo '<td>'. $held .'</td>';
										            echo "<td>";
										            echo "<div class=\"col-sm-4\"><span style=\"color:$col;\">$per</span></div>";?>

										            <div class="btn-group">
														<button data-toggle="dropdown" class="btn btn-dark-grey dropdown-toggle">
															Days of Leave <span class="caret"></span>
														</button>
														<ul class="dropdown-menu dropdown-dark pull-right" role="menu">
															<?php
																for($i=0;$i<$index;$i++)
																{
																	echo '<li><span style="color:white;">';
																	echo $leave[$i];
																	echo '</span></li>';
																}
															?>
														</ul>
													</div>

										            <?php echo '</td></tr>'; 
												}
												echo '</tbody></table>';
												echo '<br/><h3 class = "center"><a class="button center" href="view_class_attendance.php">Back to View Class Attendance page</a></h3>';
											}
										?>
										<br/>
										<br/>
									</div>
								</div>
							</div>
							<div class="col-md-2">
							</div>
						</div>
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
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
			<!-- *** READ NOTE *** -->
			<div id="readNote">
				<div class="barTopSubview">
					<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
				</div>
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="panel panel-note">
						<div class="e-slider owl-carousel owl-theme">
							<div class="item">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- *** SHOW CALENDAR *** -->
			<div id="showCalendar" class="col-md-10 col-md-offset-1">
				<div class="barTopSubview">
					<a href="#newFullEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
				</div>
				<div id="calendar"></div>
			</div>
			<!-- start: SUBVIEW FOR CALENDAR PAGE -->
			<div id="newFullEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new event</h3>
					<form class="form-full-event">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="event-id hide" type="text">
									<input class="event-name form-control" name="eventName" type="text" placeholder="Event Name...">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
								</div>
							</div>
							<div class="no-all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-clock-o"></i> </span>
										</div>
									</div>
								</div>
							</div>
							<div class="all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-calendar"></i> </span>
										</div>
									</div>
								</div>
							</div>
							<div class="hide">
								<input type="text" class="event-start-date" name="eventStartDate"/>
								<input type="text" class="event-end-date" name="eventEndDate"/>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="form-control selectpicker event-categories">
										<option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="event-cancelled">Cancelled</option>
										<option data-content="<span class='event-category event-home'>Home</span>" value="event-home">Home</option>
										<option data-content="<span class='event-category event-overtime'>Overtime</span>" value="event-overtime">Overtime</option>
										<option data-content="<span class='event-category event-generic'>Generic</span>" value="event-generic" selected="selected">Generic</option>
										<option data-content="<span class='event-category event-job'>Job</span>" value="event-job">Job</option>
										<option data-content="<span class='event-category event-offsite'>Off-site work</span>" value="event-offsite">Off-site work</option>
										<option data-content="<span class='event-category event-todo'>To Do</span>" value="event-todo">To Do</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="summernote" placeholder="Write note here..."></textarea>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-new-event" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="readFullEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<h2 class="event-title"></h2>
							<div class="btn-group options-toggle pull-right">
								<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
									<span class="caret"></span>
								</button>
								<ul role="menu" class="dropdown-menu dropdown-light pull-right">
									<li>
										<a href="#newFullEvent" class="edit-event">
											<i class="fa fa-pencil"></i> Edit
										</a>
									</li>
									<li>
										<a href="#" class="delete-event">
											<i class="fa fa-times"></i> Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<span class="event-category event-cancelled">Cancelled</span>
							<span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
						</div>
						<div class="col-md-12">
							<div class="event-start">
								<div class="event-day"></div>
								<div class="event-date"></div>
								<div class="event-time"></div>
							</div>
							<div class="event-end"></div>
						</div>
						<div class="col-md-12">
							<div class="event-content"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: SUBVIEW FOR CALENDAR PAGE -->
			<!-- end: SUBVIEW SAMPLE CONTENTS -->
		</div>
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

		<script src="assets/plugins/mixitup/src/jquery.mixitup.js"></script>
		<script src="assets/plugins/lightbox2/js/lightbox.min.js"></script>
		<script src="assets/js/pages-gallery.js"></script>
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/table-data.js"></script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				//Index.init();
				FormElements.init();
				Calendar.init();
				TableData.init();
				UIButtons.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>
