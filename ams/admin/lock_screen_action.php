<?php
	session_start();
	$y = $_POST['password'];
	$x = $_SESSION['username'];
	$con = mysqli_connect("localhost","root","root","attendance");
	$sql ='SELECT * FROM dept_login WHERE Username like "'.$x.'" AND Password like "'.$y.'" ';
	$s = mysqli_query($con,$sql);
	$res = mysqli_fetch_array($s);
	if($res == 0)
	{
		header("Location: lock_screen_fail.php");
	}
	else
	{
		header("Location: home.php");
	}
?>
