<html>
<head>
<style>
</style>
<title>Add Course</title>
<!---->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--Jquery-->
<script src="jquery.js"></script>
<!--jquery Minified-->
<script src="jquery.min.js"></script>
<!--Bootstrap Minified java script-->
<script src="js/bootstrap.min.js"></script>
<!--Jquery UI-->
<script src="jqueryui/jquery-ui.js"></script>
<!--Jquery UI CSS files-->
<link type="text/css" rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
<link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.theme.css">
<!--Bootstrap dropdown javascript files-->
<script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
</head>
<body>
<nav class="nav navbar-inverse">
<div class="navbar-header">
<a href="AdminHome.php" class="navbar-brand">Home-:</a>
</div>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="AddCourse.php"><b style="font-size:20px;">Add Formal  Course</b></a></li>
<li><a href="AddNonFormalCourse.php"><b style="font-size:20px;">Add  Non Formal Course</b></a></li>
<li><a href="AddShortTermCourse.php"><b style="font-size:20px;">Add Short Term Course</b></a></li>
</ul>
</div>
</nav>
<br/>

<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Add Formal Course</h1></center></div>
<div class="panel panel-body">
<form method="post" action="AddCourse.php">
<b>Course Name</b>
<div class="form-group">
<input type="text" name="name" Placeholder="Course name..." class="form-control"required/>
</div>
<b>Fees</b>
<div class="form-group">
<input type="text" name="fees" Placeholder="Course Fees..." class="form-control"required/>
</div>
<b>Security</b>
<div class="form-group">
<input type="text" name="security" Placeholder="Course Security Fees..." class="form-control"required/>
</div>
<b>Duration</b>
<div class="form-group">
<input type="text" name="duration" Placeholder="Course Duration..." class="form-control"required/>
</div><br/>
<input type="submit" name="reset" value="Reset" class="btn btn-danger" >
<input type="submit" name="submit1" value="Submit" class="btn btn-primary" >

</div>
</div>
</div>
</form>
</body>
</html>

<?php
if(isset($_POST['submit1']))
{
$course=$_POST['name'];
$fees=$_POST['fees'];
$security=$_POST['security'];
$duration=$_POST['duration'];
// First Name validation


	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		echo "<script>alert('Only Letter are Required in Name') </script>";
				echo "<script>window.location='AddCourse.php' </script>";

	return false;
	}

if(empty($fees))
{
	echo "<script>alert('Fees Required')</script>";
	echo "<script>window.location='AddCourse.php' </script>";
	return false;
}
else
{
	if(!preg_match("/^[0-9]*$/",$fees))
	{
		echo "<script>alert('Only Numeric Values are allowed in Fees ')</script>";
		echo "<script>window.location='AddCourse.php' </script>";
		return false;
	}
} 

if(empty($security))
{
	echo "<script>alert('Security Required')</script>";
	echo "<script>window.location='AddCourse.php' </script>";
	return false;
}
else
{
	if(!preg_match("/^[0-9]*$/",$security))
	{
		echo "<script>alert('Only Numeric Values are allowed in Security ')</script>";
		echo "<script>window.location='AddCourse.php' </script>";
		return false;
	}
} 

$con=mysqli_connect("localhost","root","","iceproject");
$ins=mysqli_query($con,"INSERT INTO `formalcourse`(`Name`, `Fee`, `Security`, `Duration`) VALUES ('$course','$fees','$security','$duration')");
if($ins==true)
{
	echo "<script>alert('Course Inserted Successfully..')</script>";
	echo "<script>window.location='AddCourse.php'</script>";
	return false;

}
else
{
	echo "<script>alert('Course Not Inserted Try Again!')</script>";
	echo "<script>window.location='AddCourse.php'</script>";
	return false;

}
}
?>

