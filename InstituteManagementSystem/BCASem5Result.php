<?php
if(isset($_POST['submit1']))
{
	session_start();
	$_SESSION['roll']=$roll;
	header('location: SemFiveResult.php');
$roll=$_POST['roll'];
	if(empty($roll))
	{
		echo "<script>alert('Roll Number Required')</script>";
	echo "<script>window.location='BCASem5Result.php'</script>";
	return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>alert('Only Numeric Values are allowed in Roll Number ')</script>";
		echo "<script>window.location='BCASem5Result.php'</script>";
		return false;
		
	}
	}
	}
?>
<html>
<head>
<style>
</style>
<title>View BCA Result </title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<div class="container-fule">
<nav class="navbar navbar-inverse">
<div class="navbar-header"><a class="navbar-brand" href="StudentHome.php">Home -:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="BCASem5Result.php"><b style="font-size:20px">Semester Five</b></a></li>
</ul>
</nav>
<div class="container">
<form method="post" >
<br/><br/><br/>
<h1>Semester Five</h1>
<div class="form-group col-sm-6">

<div class="form-group">

<lable for="Roll"><b>Roll Number</b></lable>
<input type="text" name="roll" class="form-control "><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-success"/>
</div>
</div>
</form>



</body>
</html>
