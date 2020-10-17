<?Php
if(isset($_POST['submit1']))
{
	
	$b=$_POST['b'];
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$res=mysqli_query($con,"DELETE FROM `teacherform` WHERE ID = $b");
if($res==true)
{
	echo "<script>alert('Records Deleted Successfully') </script>";
	echo "<script>window.location='TeacherDetails.php'</script>";
}
else
{
	echo "<script>alert('Not Deleted') </script>";
}

}
?><html>
<head>
<style>
</style>
<title>Search Teacher</title>
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
<li class="active"><a href="DeleteTeacherDetails.php">Delete Teacher Details</a></li>
<li><a href="TeacherDetails.php">Search Information</a></li>
<li><a href="SearchSalary.php">Search Salary</a></li>
</ul>
</nav><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Delete Teacher </h1></center></div>
<div class="panel panel-body">
<form method="post">
<b>Teacher ID:</b><input type="text" name="b" class="form-control" ><br/>
<input type="submit" value="Delete" name="submit1" class="btn btn-primary">
</form>
</body>
</html>