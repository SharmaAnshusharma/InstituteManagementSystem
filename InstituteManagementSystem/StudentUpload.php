<?php
if(isset($_POST["submit1"]))
{
	$Course=$_POST["course"];
	$name=$_POST["name"];
	$roll=$_POST["roll"];
	$date=$_POST["date"];
	
	
	
	if(empty($name))
	{
	echo "<script>alert(' Name required')</script>";	
	echo "<script>window.location='StudentUpload.php'</script>";
	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
		echo "<script>alert('Only Letter are Required') </script>";
		echo "<script>window.location='StudentUpload.php'</script>";
	
		return false;
		}
	}
	if (strlen($name) < 3)
	{
	echo "<script>alert(' Name Input is too short, minimum is 3 characters (12 max).')</script>";
	echo "<script>window.location='StudentUpload.php'</script>";
	return false;
	}
	if(strlen($name) > 20)	
	{
	echo "<script>alert(' Name is too long, maximum is 12 characters.')</script>";
	echo "<script>window.location='StudentUpload.php'</script>";
	return false;
	}
	if(empty($roll))
	{
		echo "<script>alert('Roll Number Required')</script>";
	echo "<script>window.location='StudentUpload.php'</script>";
	return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>alert('Only Numeric Values are allowed in Roll Number ')</script>";
		echo "<script>window.location='StudentUpload.php'</script>";
		return false;
		
	}
	}

	if(empty($date))
	{
		echo "<script>alert('Date Required')</script>";
	}

$file_name=$_FILES["StuFile"]["name"];
$file_tmp_name=$_FILES["StuFile"]["tmp_name"];
$file_type=$_FILES["StuFile"]["type"];
$file_size=$_FILES["StuFile"]["size"];
$store="./StudentUpload/".$file_name;

if ($file_type != "application/msword") 
{
	if(move_uploaded_file($file_tmp_name,$store))
	{ 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");

	mysqli_query($link,"INSERT INTO `studentupload`(`Course`, `Name`, `Roll`, `Date`, `File`)  VALUES ('$Course','$name','$roll','$date','$store')");
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

</style><title>Student Upload</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<a href="StudentHome.php" class="navbar-brand">Home -:</a></div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li><a href="StudentHome.php"><b style="font-size:20px">Student Home</b></a></li>
<li><a href="AccessClassSchedule.php"><b style="font-size:20px">Class Schedule</b></a></li>
<li><a href="AccessClassAssignment.php"><b style="font-size:20px">Class Assignments</b></a></li>
<li><a href="ViewResult.php"><b style="font-size:20px">View Result</b></a></li>
<li class="active"><a href="StudentUpload.php"><b style="font-size:20px">Upload</b></a></li>
</ul>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li><a href="loginHome.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</ul>
</div>
</div>
</nav>
</div>

<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Student Upload</h1></center></div>
<div class="panel panel-body">
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group">
<lable for="Course"><b>Course:</b></lable>
<select name="course" class="form-control">
<option value="" >Select Any Course</option>
<option value="A Level">A Level</option>
<option value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="Asp.NET C#">Asp.NET C#</option>
<option value="Web Designing">Web Designing (HTML, CSS, JS)</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java (Core)">Java</option>
<option value="Python">Python</option>
<option value="Hardware">Hardware</option>
<option value="Networking">Networking</option>

</select>
</div>

<div class="form-group">
<lable for="Name"><b>Student Name</b></lable>
<input type="text" name="name" class="form-control" placeholder="Student Name.."/> 
</div>
<div class="form-group">
<lable for="Roll"><b>Student Roll Number</b></lable>
<input type="text" name="roll" class="form-control" placeholder="Student Roll Number.."/> 
</div>
<lable for="Name"><b>Date</b></lable>
<input type="date" name="date" class="form-control" placeholder="Teacher Name.."/> 
</div>
<input type="file" name="StuFile" ><br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</div>
</div>
</form> 
</div>
</body>
</html>