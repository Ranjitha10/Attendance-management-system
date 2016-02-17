<?php
	session_start();
	$con = mysqli_connect("localhost","root","root","attendance");
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	$sem_type = $_POST['sem_type'];
	$data = array();
	$q = 'select distinct sub_id from student_subject where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'"';
	$r = mysqli_query($con,$q);
	$data[0][0] = " ";
	//echo $data[0][0];
	$data[0][1] = " ";
	//echo ',' . $data[0][0];
	$i = 2;
	$count = 0;
	while($row = mysqli_fetch_array($r))
	{
		$data[0][$i] = $row['sub_id'];
		//echo ',' . $data[0][$i];
		$i++;
		$count++;
		$data[0][$i] = " ";
		//echo ',' . $data[0][$i];
		$i++;
		$count++;
	}
	//echo '<br/>';
	$data[1][0] = " ";
	//echo $data[1][0];
	$data[1][1] = "Classes Held";
	//echo ',' . $data[1][1];
	for($i = 2; $i<=$count; $i++)
	{
		$sub = $data[0][$i];
		$q = 'select count(*) from attendance where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $sub .'"';
		$r = mysqli_query($con,$q);
		$row = mysqli_fetch_array($r);
		$total = $row[0];
		$q = 'select count(*) from student_subject where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $sub .'"';
		$r = mysqli_query($con,$q);
		$row = mysqli_fetch_array($r);
		$student_number = $row[0];
		$held = $total/$student_number;
		$data[1][$i] = $held;
		//echo ',' . $data[1][$i];
		$i++;
		$data[1][$i] = " ";
		//echo ',' . $data[1][$i];
	}
	//echo '<br/>';
	$data[2][0] = "USN";
	//echo $data[2][0];
	$data[2][1] = "Name";
	//echo ',' . $data[2][1];
	for($i = 2; $i<=$count; $i++)
	{
		$data[2][$i] = "Attended";
		//echo ',' . $data[2][$i];
		$i++;
		$data[2][$i] = "Percentage";
		//echo ',' . $data[2][$i];
	}
	//echo '<br/>';
	$j = 3;
	$q = 'select distinct usn from student_subject where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'"';
	$r = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($r))
	{
		$data[$j][0] = $row['usn'];
		//echo $data[$j][0];
		$usn = $row['usn'];
		$q2 = 'select * from student where usn = "'. $usn .'"';
		$r2 = mysqli_query($con,$q2);
		$row2 = mysqli_fetch_array($r2);
		$name = $row2['name'];
		$data[$j][1] = $name;
		//echo ',' . $data[$j][1];
		for($i = 2; $i<=$count; $i = $i+2)
		{
			$sub = $data[0][$i];
			$q3 = 'select count(*) from attendance where acad_year = "'. $year .'" and semester = '. $sem .' and semester_type = "'. $sem_type .'" and sub_id = "'. $sub .'" and usn = "'. $usn .'" and status = "1"';
			$r3 = mysqli_query($con,$q3);
			$row3 = mysqli_fetch_array($r3);
			$attend = $row3[0];
			if($attend == 0)
			{
				$q4 = 'select * from student_subject where usn = "'. $usn .'" and sub_id = "'. $sub .'"';
				$r4 = mysqli_query($con,$q4);
				if(mysqli_num_rows($r4)==0)
				{
					$data[$j][$i] = " ";
					//echo ',' . $data[$j][$i];
					$data[$j][$i+1] = " ";
					//echo ',' . $data[$j][$i+1];
				}
				else
				{
					$data[$j][$i] = 0;
					//echo ',' . $data[$j][$i];
					$data[$j][$i+1] = 0;
					//echo ',' . $data[$j][$i+1];
				}
				
			}
			else
			{
				$data[$j][$i] = $attend;
				//echo ',' . $data[$j][$i];
				if($data[1][$i]!=0)
				{
					$data[$j][$i+1] = ($attend/$data[1][$i])*100;
				}
				else
				{
					$data[$j][$i+1] = 0;
				}
				
				//echo ',' . $data[$j][$i+1];
			}
		}
		$j++;
		//echo '<br/>';
	}

	/*foreach($data as $row)
	{
		foreach($row as $col)
		{
			echo $col." ";
		}
		echo '<br>';
	}*/
	$temp = $year % 100;
	$temp++;
	if($temp < 10) $year = $year."-0".$temp;
	else $year = $year."-".$temp;
	$f = $_SESSION["username"]."/".$year."/".$sem.".csv";
	header("Content-type: text/csv");
    header('Content-Disposition: attachment; filename= "'.$f.'" ');
    header("Pragma: no-cache");
    header("Expires: 0"); 
    $file = fopen('php://output', 'w');                                 
    foreach ($data as $row)
    {
        fputcsv($file, $row);              
    }
    /*$csv = "temp.csv";
	$file = fopen($csv , "w");
	foreach($data as $line)
	{
	fputcsv($file,$line);
	}
	fclose($file);*/
?>
