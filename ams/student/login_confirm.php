<?php
	$x = $_POST['username'];
	$y = $_POST['password'];
	$con = mysqli_connect("localhost","root","root","attendance");
	$sql ='SELECT * FROM student_login WHERE Username like "'.$x.'" AND Password like "'.$y.'" ';
	$s = mysqli_query($con,$sql);
	$res = mysqli_fetch_array($s);
	if($res == 0)
	{
		header("Location: login_fail.php");
	}
	else
	{
		session_start();
		$_SESSION['username'] = $x;
		if(isset($_SESSION['admin']) && $_SESSION['admin']=="true")
		{
			$_SESSION['admin'] = "false";
		}
		if(isset($_SESSION['staff']) && $_SESSION['staff']=="true")
		{
			$_SESSION['staff'] = "false";
		}
		$_SESSION['student'] = "true";
		header("Location: home.php");
	}
?>