<?php
if(isset($_POST['submit1']))
{
	session_start();
	$roll=$_POST['roll'];
	if(empty($roll))
	{
		echo "<script>alert('Roll Number Required')</script>";
	echo "<script>window.location='AlevelSem2Result.php'</script>";
	return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>alert('Only Numeric Values are allowed in Roll Number ')</script>";
		echo "<script>window.location='AlevelSem2Result.php'</script>";
		return false;
		
	}
	}

	$_SESSION['roll']=$roll;
	header('location: SemTwoAlevel.php');
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
<li class="active"><a href="AlevelSem2Result.php"><b style="font-size:20px">Semester Two</b></a></li>
</ul>
</nav>
<div class="container">
<form method="post" >
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