<?php
if(isset($_POST["submit1"]))
{
	$course=$_POST["Course"];
	$name=$_POST["name"];
	$sub=$_POST["sub"];
	$task=$_POST["task"];
	$date1=$_POST["date1"];
	$date2=$_POST["date2"];
	
	if(empty($course))
	{
		echo "<script>alert('Course is Required')</script>";
		return false;
	}
	if(empty($name))
	{
	echo "<script>alert('Teacher Name required')</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
		echo "<script>alert('Only Letter are Required') </script>";
		return false;
		}
	}
	if (strlen($name) < 3)
	{
	echo "<script>alert('Teacher Name Input is too short, minimum is 3 characters (12 max).')</script>";
	return false;
	}
	if(strlen($name) > 20)	
	{
	echo "<script>alert('Teacher Name is too long, maximum is 12 characters.')</script>";
	return false;
	}
	

	if(empty($sub))
	{
	echo "<script>alert('Subject Name required')</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$sub))
		{
			echo "<script>alert('Only Letter are Required') </script>";
			return false;
		}
	}
	if(empty($task))
	{
		echo "<script>alert('Assignment is Required')</script>";
	return false;
	}
	if(empty($date1))
	{
		echo "<script>alert('Date is Required')</script>";
	return false;
	}
	if(empty($date2))
	{
		echo "<script>alert('Completion Date is Required')</script>";
	return false;
	}
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$ins=mysqli_query($link,"INSERT INTO `teacheruploadclassass`(`Course`, `Teacher`, `Subject`, `Assignment`, `Date`, `Completion Date`) VALUES ('$course','$name','$sub','$task','$date1','$date2');");
	if($ins==true)
	{
		 echo"<script> alert('Assignments Uploaded successfully')</script>";
	}
	else
	{
		echo"<script> alert('Not Uploaded Please Try!!')</script>";
	}
}
?>
<html>
<head>
<style>

</style>
<title> Assignments Upload</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="navbar-header"><a href="TeacherHome.php" class="navbar-brand">Home -:</a></div>
</div>
<ul class="nav navbar-nav">

<li><a href="teacherUpload.php"><b style="font-size:20px">Upload Notice</b></a></li>
<li class="active"><a href="ClassAssignment.php"><b style="font-size:20px">Class Assignment</b></a></li>
<li><a href="UploadResult.php"><b style="font-size:20px">Upload Result</b></a></li>
<li><a href="NoticeFromAdminDownload.php"><b style="font-size:20px">Download Admin</b></a></li>
<li><a href="StudentUploadAccess.php"><b style="font-size:20px">Download Student Upload</b></a></li>
</nav>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Upload Class Assignments</h1></center></div>
<div class="panel panel-body">
<form method="post" action="">
<div class="form-group">
<lable for="Course"><b>Course</b></lable>
<select class="form-control" name="Course">
<option>Select Any Course</option>
<option Value="BCA" >BCA</option>
<option Value="A Level">A Level</option>
<option Value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="ASP.NET C#">ASP.NET C#</option>
<option value="Web Designing">Web Designing</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java">Java</option>
<option value="Python">Python</option>
</select>
</div>
<div class="form-group">
<lable for="Name"><b>Teacher Name</b></lable>
<input type="text" name="name" class="form-control" placeholder="Teacher Name.."/> 
</div>
<div class="form-group">
<lable for="Subject"><b>Subject</b></lable>
<input type="text" name="sub" class="form-control" placeholder="Subject Name.."/> 
</div>
<div class="form-group">
<lable for="Task"><b>Task</b></lable>
<input type="text" name="task" class="form-control" placeholder="Assignments.."/> 
</div>
<div class="form-group">
<lable for="Date"><b>Date</b></lable>
<input type="Date" name="date1" class="form-control"/> 
</div>
<div class="form-group">
<lable for="date"><b>Completion Date</b></lable>
<input type="Date" name="date2" class="form-control"/> 
</div>

<input type="submit" name="reset" value="Reset" class="btn btn-primary"/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary"/>
</form> 
</div>
</div>
</div>
</body>
</html>