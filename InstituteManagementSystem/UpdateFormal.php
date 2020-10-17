<?Php
if(isset($_POST['submit1']))
{
	$a=$_POST['a'];

if(empty($a))
	{
		echo "<script>alert('Update Value Required')</script>";
	echo "<script>window.location='UpdateFormal.php'</script>";
		return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$a))
	{
		echo "<script>alert('Only Numeric Values are allowed in Update Value ')</script>";
		echo "<script>window.location='UpdateFormal.php'</script>";
		return false;
	}
	}

	$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$res=mysqli_query($con,"UPDATE `formalcourse` SET `Fee`=Fee + $a ");
if($res==true)
{
	echo "<script>alert('fees Updated') </script>";
	echo "<script>window.location='Fees.php'</script>";
}
else
{
	echo "<script>alert('NotUpdated') </script>";
}

}
?>
<html>
<head>
<style>
body {
   background-image: url("back2.jpg");
   background-color: #cccccc;
}

</style>
<title>Update Short Term Fees</title>
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
<div class="container-fluid">
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="#" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="UpdateFormal.php">Update Formal Fees</a></li>
<li><a href="Fees.php">Course Fees </a></li>
</ul>
</nav><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1><center><h1>Update Formal Fees</h1></center></h1></div>
<div class="panel panel-body">
<form method="post">
<b>Update Value:</b><input type="text" name="a" class="form-control"><br/>
<input type="submit" value="Update Formal" name="submit1" class="btn btn-primary">
</form>
</body>
</html>