<?php
error_reporting(0);
if(isset($_POST["submit1"]))
{
	$name=$_POST["name"];
	$date=$_POST["date"];
$file_name=$_FILES["teacherFile"]["name"];
$file_tmp_name=$_FILES["teacherFile"]["tmp_name"];
$file_type=$_FILES["teacherFile"]["type"];
$file_size=$_FILES["teacherFile"]["size"];
$store="TeacherUpload/".$file_name;

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
	if(empty($date))
	{
		echo "<script>alert('Date is Required')</script>";
	return false;
	}
if ($file_type != "application/msword") 
{
	
	if(move_uploaded_file($file_tmp_name,$store))
	{ 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");

	mysqli_query($link,"INSERT INTO `teacheruploadnotice`(`Name`,`Date`,`File Name`,`File Size`, `File Type`) VALUES ('$name','$date','$file_name','$file_size','$file_type')");
	echo "<script>alert('File Uploaded Successfully')</script>";
	}

	else
	{
		echo "<script>alert('Please Try again!')</script>";
	}
}
else
{
	
	echo "You Can Upload Only Doc file";
}
}
?>
<html>
<head>
<style>

</style>
<title>Teacher Upload</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="TeacherHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="teacherUpload.php"><b style="font-size:20px">Upload Notice</b></a></li>
<li><a href="ClassAssignment.php"><b style="font-size:20px">Class Assignment</b></a></li>
<li><a href="UploadResult.php"><b style="font-size:20px">Upload Result</b></a></li>
<li><a href="NoticeFromAdminDownload.php"><b style="font-size:20px">Download Admin</b></a></li>
<li><a href="StudentUploadAccess.php"><b style="font-size:20px">Download Student Upload</b></a></li>
<li><a href="Attendence.php"><b style="font-size:20px">Attendence</b></a></li>

</ul>
</nav><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Upload Important Notices</h1></center></div>
<div class="panel panel-body">
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group">
<lable for="Name"><b>Teacher Name</b></lable>
<input type="text" name="name" class="form-control" placeholder="Teacher Name.."/> 
</div>
<div class="form-group">
<lable for="Name"><b>Date</b></lable>
<input type="date" name="date" class="form-control" placeholder="Teacher Name.."/> 
</div>
<input type="file" name="teacherFile" ><br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</div>
</div>
</div>
</form> 

<ul class="pager">
<li> <a href="TeacherHome.php">Previous</a></li>
</ul>
</body>
</html>