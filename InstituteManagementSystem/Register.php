<?Php
if(isset($_POST['submit1']))
{
$email=$_POST['email'];	
$password=$_POST['password'];

if(empty($email))
{
	echo "<script>alert('Email is required')</script>";
echo "<script>window.location='Register.php'</script>";
	return false;
}

if(empty($password))
{
	echo "<script>alert('Password is required')</script>";
	echo "<script>window.location='Register.php'</script>";
	return false;
}
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$ins=mysqli_query($con,"INSERT INTO `registertable`(`Email`, `Password`) VALUES ('$email','$password')");
	if($ins==true)
	{
	 echo "<script>alert('Registered Successfully')</script>";
	  echo "<script>window.location='loginHome.php'</script>";
	}
	else
	{
	  echo "<script>alert('Not Registered ')</script>";
	}
 }
?>
<html>
<head>
<style>
</style>
<title>Students Login</title>
<?php
include("bootstrap.php");

?>
</head>
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="Register.php"><b style="font-size:20px">Register</b></a></li>
</ul>
</nav>
<br/><br/><br/><br/><br/><br/>
<div class="container">
<div style="padding-left:140px;">
<div class="panel panel-default" >
<div class="panel-heading"><center><img src="register1.png" alt="error" height="100px" width="250px"><h1>Registration Form</h1></center></div>
<div class="panel-body">

<form method="post" action="">
<div class="form-group ">
<lable for="Email"><b>Email:</b></lable>
<input type="email" name="email" class="form-control" Placeholder="Email..."/>
</div>
<div class="form-group ">
<lable for="Password"><b>Password:</b></lable>
<input type="password" name="password" class="form-control" Placeholder="Enter Password..."/>
</div>
</br></br>
<center>
<input type="submit" name="reset" value="Reset" class="btn btn-primary btn-lg">
<input type="submit" name="submit1" value="Submit" class="btn btn-primary btn-lg"></center>
</form>
</div>
</div>
</div>

</body>
</html>
