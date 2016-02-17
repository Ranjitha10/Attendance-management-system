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
		<title>Admin - Attendance Chart</title>
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
									<h1>Attendance Report <small>Graph </small></h1>
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
							<div class="row" style="font-size:15px">
								<div class="col-sm-2">
								</div>
								<div class="col-sm-8">
									<div id="container6"></div>
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
					<div class="pull-right">
						<span class="go-top"><i class="fa fa-chevron-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
			<!-- *** READ NOTE *** -->
			
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

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
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
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/table-data.js"></script>

		<script src="highcharts/js/highcharts.js"></script>
		<script src="highcharts/js/highcharts-3d.js"></script>
		<script src="highcharts/js/modules/exporting.js"></script>

		<script type="text/javascript">
		function reqListener () {
		      console.log(this.responseText);
		}
		console.log("pos1");

	    var oReq = new XMLHttpRequest(); //New request object
	    oReq.onload = function() {
		    var data = JSON.parse(this.responseText);
		    console.log("pos2");

			$(function () {

				Highcharts.createElement('link', {
				   href: 'http://fonts.googleapis.com/css?family=Unica+One',
				   rel: 'stylesheet',
				   type: 'text/css'
				}, null, document.getElementsByTagName('head')[0]);

				Highcharts.theme = {
				   colors: ["#2b908f", "#90ee7e", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
				      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
				   chart: {
				      backgroundColor: {
				         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
				         stops: [
				            [0, '#2a2a2b'],
				            [1, '#3e3e40']
				         ]
				      },
				      style: {
				         fontFamily: "'Unica One', sans-serif"
				      },
				      plotBorderColor: '#606063'
				   },
				   title: {
				      style: {
				         color: '#E0E0E3',
				         textTransform: 'uppercase',
				         fontSize: '20px'
				      }
				   },
				   subtitle: {
				      style: {
				         color: '#E0E0E3',
				         textTransform: 'uppercase'
				      }
				   },
				   xAxis: {
				      gridLineColor: '#707073',
				      labels: {
				         style: {
				            color: '#F0F0F3'
				         }
				      },
				      lineColor: '#707073',
				      minorGridLineColor: '#505053',
				      tickColor: '#707073',
				      title: {
				         style: {
				            color: '#F0F0F3'

				         }
				      }
				   },
				   yAxis: {
				      gridLineColor: '#707073',
				      labels: {
				         style: {
				            color: '#F0F0F3'
				         }
				      },
				      lineColor: '#707073',
				      minorGridLineColor: '#505053',
				      tickColor: '#707073',
				      tickWidth: 1,
				      title: {
				         style: {
				            color: '#F0F0F3'
				         }
				      }
				   },
				   tooltip: {
				      backgroundColor: 'rgba(0, 0, 0, 0.85)',
				      style: {
				         color: '#F0F0F0'
				      }
				   },
				   plotOptions: {
				      series: {
				         dataLabels: {
				            color: '#B0B0B3'
				         },
				         marker: {
				            lineColor: '#333'
				         }
				      },
				      boxplot: {
				         fillColor: '#505053'
				      },
				      candlestick: {
				         lineColor: 'white'
				      },
				      errorbar: {
				         color: 'white'
				      }
				   },
				   legend: {
				      itemStyle: {
				         color: '#E0E0E3'
				      },
				      itemHoverStyle: {
				         color: '#FFF'
				      },
				      itemHiddenStyle: {
				         color: '#606063'
				      }
				   },
				   credits: {
				      style: {
				         color: '#666'
				      }
				   },
				   labels: {
				      style: {
				         color: '#707073'
				      }
				   },

				   drilldown: {
				      activeAxisLabelStyle: {
				         color: '#F0F0F3'
				      },
				      activeDataLabelStyle: {
				         color: '#F0F0F3'
				      }
				   },

				   navigation: {
				      buttonOptions: {
				         symbolStroke: '#DDDDDD',
				         theme: {
				            fill: '#505053'
				         }
				      }
				   },

				   // scroll charts
				   rangeSelector: {
				      buttonTheme: {
				         fill: '#505053',
				         stroke: '#000000',
				         style: {
				            color: '#CCC'
				         },
				         states: {
				            hover: {
				               fill: '#707073',
				               stroke: '#000000',
				               style: {
				                  color: 'white'
				               }
				            },
				            select: {
				               fill: '#000003',
				               stroke: '#000000',
				               style: {
				                  color: 'white'
				               }
				            }
				         }
				      },
				      inputBoxBorderColor: '#505053',
				      inputStyle: {
				         backgroundColor: '#333',
				         color: 'silver'
				      },
				      labelStyle: {
				         color: 'silver'
				      }
				   },

				   navigator: {
				      handles: {
				         backgroundColor: '#666',
				         borderColor: '#AAA'
				      },
				      outlineColor: '#CCC',
				      maskFill: 'rgba(255,255,255,0.1)',
				      series: {
				         color: '#7798BF',
				         lineColor: '#A6C7ED'
				      },
				      xAxis: {
				         gridLineColor: '#505053'
				      }
				   },

				   scrollbar: {
				      barBackgroundColor: '#808083',
				      barBorderColor: '#808083',
				      buttonArrowColor: '#CCC',
				      buttonBackgroundColor: '#606063',
				      buttonBorderColor: '#606063',
				      rifleColor: '#FFF',
				      trackBackgroundColor: '#404043',
				      trackBorderColor: '#404043'
				   },

				   // special colors for some of the
				   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
				   background2: '#505053',
				   dataLabelsColor: '#B0B0B3',
				   textColor: '#C0C0C0',
				   contrastTextColor: '#F0F0F3',
				   maskColor: 'rgba(255,255,255,0.3)'
				};

				// Apply the theme
				Highcharts.setOptions(Highcharts.theme);
				Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
		        return {
		            radialGradient: { cx: 0.6, cy: 0.3, r: 0.5 },
		            stops: [
		                [0, "#00CCCC" ],
		                [1, Highcharts.Color("#009999").brighten(-0.1).get('rgb')] // darken
		            ]
		        };
		    });
			    // Set up the chart
			    var chart = new Highcharts.Chart({
			        chart: {
			            renderTo: 'container6',
			            type: 'column',
			            margin: 75,
			            options3d: {
			                enabled: true,
			                alpha: 16,
			                beta: 8,
			                depth: 50,
			                viewDistance: 25
			            }
			        },
			        title: {
			            text: 'Attendance '
			        },
			        subtitle: {
			            text: 'Number of Students vs Attendance Percentage for '+data[5]+' Sem '+data[6]+' Subject '+data[7],
			        },
			        xAxis: {
			        	title: {
			                text: 'Attendance %'
			            },
			            categories: [
			                '0 - 50',
			                '50 - 65',
			                '65 - 75',
			                '75 - 85',
			                '85 - 100',]
			        },
			        yAxis: {
			            min: 0,
			            title: {
			                text: 'No. of Students'
			            }
			        },
			        plotOptions: {
			            column: {
			                depth: 25
			            }
			        },
			        series: [{
			        	showInLegend: false,
			            data: [data[0],data[1],data[2],data[3],data[4]]
			        }]
			    });

			    function showValues() {
			        $('#R0-value').html(chart.options.chart.options3d.alpha);
			        $('#R1-value').html(chart.options.chart.options3d.beta);
			    }

			    // Activate the sliders
			    $('#R0').on('change', function () {
			        chart.options.chart.options3d.alpha = this.value;
			        showValues();
			        chart.redraw(false);
			    });
			    $('#R1').on('change', function () {
			        chart.options.chart.options3d.beta = this.value;
			        showValues();
			        chart.redraw(false);
			    });

			    showValues();
			});
		};

			oReq.open("get", "attendance_chart_action.php", false);
		    oReq.send();
		</script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>