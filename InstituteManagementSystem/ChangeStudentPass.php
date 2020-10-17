<?php
if(isset($_POST['submit1']))
{
	$id=$_POST['id'];
	$password=$_POST['pass1'];
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$result=mysqli_query($con,"UPDATE `ugstudentform` SET `Password`= '$password' WHERE `ID` = '$id';");
	if($result==true)
	{
		echo "<script>alert('Your Password Changed Successfully')</script>";
		echo "<script>window.location='StudentLogin.php'</script>";
	}
	else
	{
		echo "<scirpt>alert('Id does Not exist!!')</script>";
	}
	
}
?>
<html>
<head>
<style>
</style>
<title>Change Password</title>
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
<li><a href="#" class="navbar-brand"> ICE</a></li>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="ChangeStudentPass.php">Change UG Student Password</a></li>
<li><a href="ChangeShortStudentPass.php">Change Short Term Student Password</a></li>
</ul>
</nav>
<br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1>Change UG Student Password</h1></div>
<div class="panel panel-body">
<form method="post" >
<div class="form-group">
<b>Roll Number</b>
<input type="text" name="id" class="form-control">
</div>
<div class="form-group">
<b>New Password</b>
<input type="password" name="pass1" class="form-control">
</div>

<input type="submit" value="Change" name="submit1" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>