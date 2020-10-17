<?php
if(isset($_POST["submit1"]))
{
	$session=$_POST['session'];
	$course=$_POST["Course"];
	$subject=$_POST["subject"];
	$teacher=$_POST["teacher"];
	$time=$_POST["time"];
	$days =$_POST['d'];
			$chk="";  
		foreach($days as $chk1)  
		{	  
		$chk .= $chk1.",";  
		}
	
 

	if(empty($session))
	{
		echo "<script>alert('Session is Required')</script>";
		return false;
	}

	if(empty($course))
	{
		echo "<script>alert('Course is Required')</script>";
		return false;
	}

	if(empty($subject))
	{
	echo "<script>alert('Subject Name required')</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$subject))
		{
			echo "<script>alert('Only Letter are Required') </script>";
			return false;
		}
	}
	if(empty($teacher))
	{
	echo "<script>alert('Teacher Name required')</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$teacher))
		{
		echo "<script>alert('Only Letter are Required') </script>";
		return false;
		}
	}
	if (strlen($teacher) < 3)
	{
	echo "<script>alert('Teacher Name Input is too short, minimum is 3 characters (12 max).')</script>";
	}
	if(strlen($teacher) > 20)	
	{
	echo "<script>alert('Teacher Name is too long, maximum is 12 characters.')</script>";
	}
	if(empty($time))
	{
	echo "<script>alert('Time is Required')</script>";
	}
		
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$ins=mysqli_query($link,"INSERT INTO `classschedule`(`Session`,`Course`,`Subject`, `Teacher`, `Time`, `Days`) VALUES ('$session','$course','$subject','$teacher','$time','$chk')");
	if($ins==true)
	{
		 echo"<script> alert('Schedule Inserted successfully')</script>";
	}
	else
	{
		echo"<script> alert('Not inserted Please Try!!')</script>";
	}


}
?>