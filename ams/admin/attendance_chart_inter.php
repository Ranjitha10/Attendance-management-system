<?php
	session_start();
	$_SESSION['acad_year'] = $_POST['acad_year'];
	$_SESSION['sem'] = $_POST['sem'];
	$_SESSION['sem_type'] = $_POST['sem_type'];
	$_SESSION['subid'] = $_POST['subid'];

	header('location: attendance_chart_display.php')
?>