<?php
if(isset($_POST['submit1']))
{	
	$roll=$_POST['roll'];
	$name=$_POST['name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	

	
	$marks1=$_POST['marks1'];
	$marks2=$_POST['marks2'];
	$marks3=$_POST['marks3'];
				if(empty($name))
	{
	echo "<script>alert('Name is required')</script>";	
	echo "<script>window.location='OLevelResult.php'</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
		echo "<script>alert('Only Letter are Required in Name') </script>";
	echo "<script>window.location='OLevelResult.php'</script>";
	return false;
		}
	}
	if (strlen($name) < 3)
	{
	echo "<script>alert('Name is too short, minimum is 3 characters (12 max).')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
	if(strlen($name) > 20)	
	{
	echo "<script>alert('Name is too long, maximum is 12 characters.')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
if(empty($roll))
{
	echo "<script>alert('Roll Number is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>Only Numeric Values are allowed in Roll Number')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}

	
	if(empty($marks1))
{
	echo "<script>alert('Marks  is Required')</script>";

echo "<script>window.location='OLevelResult.php'</script>";	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks1))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";return false;
	}
}
	if(empty($marks2))
{
	echo "<script>alert('Marks  is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks2))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}
	if(empty($marks3))
{
	echo "<script>alert('Marks is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks3))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$ins=mysqli_query($con,"INSERT INTO `olevelsem1`(`Roll`, `Name`, `Sub1`, `Sub2`, `Sub3`, `Marks1`, `Marks2`, `Marks3`) VALUES ('$roll','$name','$sub1','$sub2','$sub3','$marks1','$marks2','$marks3')");
	if($ins==true)
	{
		echo "<script>alert('Result Uploaded Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Result Not Uploaded ')</script>";
	}
}

?>
<?php
if(isset($_POST['submit2']))
{	
	$roll=$_POST['roll'];
	$name=$_POST['name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	
	
	$marks1=$_POST['marks1'];
	$marks2=$_POST['marks2'];
	$marks3=$_POST['marks3'];

				if(empty($name))
	{
	echo "<script>alert('Name is required')</script>";	
	echo "<script>window.location='OLevelResult.php'</script>";	
	return false;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
		echo "<script>alert('Only Letter are Required in Name') </script>";
	echo "<script>window.location='OLevelResult.php'</script>";
	return false;
		}
	}
	if (strlen($name) < 3)
	{
	echo "<script>alert('Name is too short, minimum is 3 characters (12 max).')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
	if(strlen($name) > 20)	
	{
	echo "<script>alert('Name is too long, maximum is 12 characters.')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
if(empty($roll))
{
	echo "<script>alert('Roll Number is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>Only Numeric Values are allowed in Roll Number')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}
	if(empty($marks1))
{
	echo "<script>alert('Marks  is Required')</script>";

echo "<script>window.location='OLevelResult.php'</script>";	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks1))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";return false;
	}
}
	if(empty($marks2))
{
	echo "<script>alert('Marks  is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks2))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}
	if(empty($marks3))
{
	echo "<script>alert('Marks is Required')</script>";
echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$marks3))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		echo "<script>window.location='OLevelResult.php'</script>";
	return false;
	}
}
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"icepoject");
	$ins=mysqli_query($con,"INSERT INTO `olevelsem2`(`Roll`, `Name`, `Sub1`, `Sub2`, `Sub3`, `Marks1`, `Marks2`, `Marks3`) VALUES ('$roll','$name','$sub1','$sub2','$sub3','$marks1','$marks2','$marks3')");
	if($ins==true)
	{
		echo "<script>alert('Result Uploaded Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Result Not Uploaded ')</script>";
	}
}

?>


<html>
<head>
<style>
</style>
<title>Upload Result </title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="navbar-header"><a href="TeacherHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="BCAResult.php"><b style="font-size:20px">O Level Ressult</b></a></li>
</ul>
</nav>
<body>
<div class="container">
<h3>Semester One</h3>
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>O Level Semester One</h1></center></div>
<div class="panel panel-body">
<form method="post">

<div class="form-group col-sm-6">
<lable for="Roll"><b>Roll Number</b></lable>
<input type="text" name="roll" class="form-control" placeholder="Roll Number..."required/>
</div>
<div class="form-group col-sm-6">
<lable for="Name"><b>Name</b></lable>
<input type="text" name="name" class="form-control" placeholder="Full Name..."required/>
</div>

<table>
<tr><th>Subject</th><th>Marks</th></tr>
<tr><td><input type="text" name="sub1" class="form-control col-sm-4"required></td><td><input type="text" name="marks1" class="form-control col-sm-4"required></td></tr>
<tr><td><input type="text" name="sub2" class="form-control col-sm-4"required></td><td><input type="text" name="marks2" class="form-control col-sm-4"required></td></tr>
<tr><td><input type="text" name="sub3" class="form-control col-sm-4"required></td><td><input type="text" name="marks3" class="form-control col-sm-4"required></td></tr>


</table>
<br/>
<input type="submit" name="reset" class="btn btn-primary" Value="Reset"/>
<input type="submit" name="submit1" class="btn btn-primary" Value="Submit"/>
</form>
<center><mark>This Result is based on the mid exam of the ICE.</mark></center>
</div>
</div>
</div>
</div>
<div class="container">
<h3>Semester Two</h3>
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>O Level Semester Two</h1></center></div>
<div class="panel panel-body">

<form method="post">

<div class="form-group col-sm-6">
<lable for="Roll"><b>Roll Number</b></lable>
<input type="text" name="roll" class="form-control" placeholder="Roll Number..."/required>
</div>
<div class="form-group col-sm-6">
<lable for="Name"><b>Name</b></lable>
<input type="text" name="name" class="form-control" placeholder="Full Name..."/required>
</div>

<table>
<tr><th>Subject</th><th>Marks</th></tr>
<tr><td><input type="text" name="sub1" class="form-control col-sm-4"required></td><td><input type="text" name="marks1" class="form-control col-sm-4"required></td></tr>
<tr><td><input type="text" name="sub2" class="form-control col-sm-4"required></td><td><input type="text" name="marks2" class="form-control col-sm-4"required></td></tr>
<tr><td><input type="text" name="sub3" class="form-control col-sm-4"required></td><td><input type="text" name="marks3" class="form-control col-sm-4"required></td></tr>

</table>
<br/>
<input type="submit" name="reset" class="btn btn-primary" Value="Reset"/>
<input type="submit" name="submit2" class="btn btn-primary" Value="Submit"/>
</form>
<center><mark>This Result is based on the mid exam of the ICE.</mark></center>
</div>
</div>
</div>
</div>

<ul class="pager">
  <li><a href="UploadResult.php">Previous</a></li>
 </ul> 

</body>
</html>