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
$ins=mysqli_query($con,"UPDATE `admintable` SET `Password`= '$password' WHERE Email = '$email'; ");
	if($ins==true)
	{
	 echo "<script>alert('Password Changed Successfully')</script>";
	  echo "<script>window.location='Admin.php'</script>";
	}
	else
	{
	  echo "<script>alert('Problem In Changing Password')</script>";
	}
 }
?>
<html>
<head>
<style>
body {
   background-image: url("back2.jpg");
 
}
</style>
<title>Students Login</title>
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
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="Register.php">Register</a></li>
</ul>
</nav>
<br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="col-md-10" style="padding-left:220px;">
<div class="panel panel-default" >
<div class="panel-heading"><h1>Change Password</h1></div>
<div class="panel-body">

<form method="post" action="">
<div class="form-group ">
<lable for="Email"><b>Email:</b></lable>
<input type="email" name="email" class="form-control" Placeholder="Email..."/>
</div>
<div class="form-group ">
<lable for="Password"><b>New Password:</b></lable>
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
</div>

</body>
</html>
