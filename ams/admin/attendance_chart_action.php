<?php
	session_start();
	$con = mysqli_connect("localhost","root","root","attendance");
	$year = $_SESSION['acad_year'];
	$sem = $_SESSION['sem'];
	$sem_type = $_SESSION['sem_type'];
	$subid = $_SESSION['subid'];

	$data[0]=0;	//0-50
	$data[1]=0;	//51-65
	$data[2]=0;	//66-75
	$data[3]=0;	//76-85
	$data[4]=0;	//86-100

	$xx =$year % 100;
	$xx++;
	if($xx < 10) $temp = $year."-0".$xx;
	else $temp = $year."-".$xx;
	$data[5] = $temp;
	$data[6] = $sem;
	$data[7] = $subid;

	$q = 'select count(*) from attendance where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $subid .'"';
	$r = mysqli_query($con,$q);
	$row = mysqli_fetch_array($r);
	$total = $row[0];

	$q = 'select count(*) from student_subject where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $subid .'"';
	$r = mysqli_query($con,$q);
	$row = mysqli_fetch_array($r);
	$student_number = $row[0];

	$held = $total/$student_number;

	$q = 'select usn from student_subject where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $subid .'"';
	$r = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($r))
	{
		$usn = $row['usn'];
		$q3 = 'select count(*) from attendance where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $subid .'" and usn = "'. $usn .'" and status = "1"';
		$r3 = mysqli_query($con,$q3);
		$row3 = mysqli_fetch_array($r3);
		$attend = $row3[0];

		if($held!=0)
		{
			$per = ($attend/$held)*100;	
		}
		else
		{
			$per = 0;
		}
		if($per<50)
		{
			$data[0]++;
		}
		else if($per<65)
		{
			$data[1]++;
		}
		else if($per<75)
		{
			$data[2]++;
		}
		else if($per<85)
		{
			$data[3]++;
		}
		else if($per<=100)
		{
			$data[4]++;
		}

	}

	echo json_encode($data);
	/*echo '<br/>' . $data[0];
	echo '<br/>' . $data[1];
	echo '<br/>' . $data[2];
	echo '<br/>' . $data[3];
	echo '<br/>' . $data[4]; */
?>