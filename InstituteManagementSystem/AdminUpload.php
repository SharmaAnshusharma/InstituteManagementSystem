<?php
if(isset($_POST["submit1"]))
{
	$date=$_POST["date"];
$file_name=$_FILES["adminFile"]["name"];
$file_tmp_name=$_FILES["adminFile"]["tmp_name"];
$file_type=$_FILES["adminFile"]["type"];
$file_size=$_FILES["adminFile"]["size"];
$store="UploadAdmin/".$file_name;
if(empty($date))
{
	echo "<script>alert('Date is Required')</script>";
echo "<script>window.location='AdminUpload.php'</script>";
}
if(empty($file_name))
{
	echo "<script>alert('Please Select a File')</script>";
echo "<script>window.location='AdminUpload.php'</script>";
}

if ($file_type != "application/msword") 
{
	if(move_uploaded_file($file_tmp_name,$store))
	{ 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");

	mysqli_query($link,"INSERT INTO `adminupload`(`File Name`, `File Size` ,`File Type`,`Date`)  VALUES ('$file_name','$file_size','$store','$date')");
	echo "<script>alert('File Uploaded Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Please Try again!...')</script>";
	}
}
else
{
	echo "<script>alert('You Can Upload Only Doc file')</script>";
}
}
?>
<html>
<head>
<style> 

</style>
<title>Admin Upload</title>
<?php
include("bootstrap.php");

?>
</head>
<body>
<div class="container-fule">
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="adminUpload.php"><b style="font-size:20px">Upload Important Notices</b></a></li>
<li><a href="ClassSchedule.php"><b style="font-size:20px">Upload Schedule</b></a></li>
<li><a href="StudentUploadAccess.php"><b style="font-size:20px">Download Student Upload</b></a></li>
<li><a href="HomeUploadAccess.php"><b style="font-size:20px">Download Ressume</b></a></li>

</ul>
</nav>
<br/><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default ">
<div class="panel panel-heading"><center><h1>Upload Important Notices</h1></center></div>
<div class="container" >
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group col-sm-11">
<b>Enter Date:</b>
<br/>
<input type="date" name="date" class="form-control ">
<br>
<input type="file" name="adminFile" ><br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</div>
</form> 
</div>
</div>
</div>
</div>
<ul class="pager">
<li><a href="AdminHome.php">Previous</a></li>
</ul>
</body>
</html>