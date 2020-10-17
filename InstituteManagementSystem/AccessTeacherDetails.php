
<html>
<head>
<style>
body {
   background-image: url("back1.png");
 
}
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
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Search Information</a></li>
<li><a href="TeacherSearchByName.php">Search Name</a></li>
<li><a href="TeacherSearchById.php">Search By ID</a></li>
</ul>
</nav><br/>

<?php
if(isset($_POST['submit1']))
{ 
	$teacher=$_POST['Teacher'];
	switch($teacher)
	{
		case "Teacher Details":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `teacherform`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<tr>";
	echo "<th>"; echo "ID"; echo "</th>";
	echo "<th>"; echo "First Name"; echo "</th>";
	echo "<th>"; echo "Last Name"; echo "</th>";
	echo "<th>"; echo "Email"; echo "</th>";
	echo "<th>"; echo "Contact"; echo "</th>";
	echo "<th>"; echo "Address"; echo "</th>";
	echo "<th>"; echo "Salary"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["ID"]; echo "</td>";
	echo "<td>"; echo $row["First Name"]; echo "</td>";
	echo "<td>"; echo $row["Last Name"]; echo "</td>";
	echo "<td>"; echo $row["Email"]; echo "</td>";
	echo "<td>"; echo $row["Contact"]; echo "</td>";
	echo "<td>"; echo $row["Address"]; echo "</td>";
	echo "<td>"; echo $row["Salary"]; echo "</td>";
	
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteTeaherDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	
	
	default:
	echo "<script>alert('Your Keywords is worng!!')</script>";
	}
	
	echo "</table>";
	echo "</div>";
}
?>
