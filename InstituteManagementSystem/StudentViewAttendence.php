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
<ul class="nav navbar-nav">
<li class="active"><a href="ViewAttendence.php">View Attendence</a></li>
</ul>
</div>
</nav>
<div class="container">
<?php
if(isset($_POST['submit1']))
{
	$course=$_POST['course'];
	$roll=$_POST['roll'];
	$subject=$_POST['subject'];
	echo "<table class='table'>";
	
	echo "</table>";
	$con=mysqli_connect("localhost","root","","iceproject");
	$res=mysqli_query($con,"SELECT * FROM `attendence` WHERE Course = '$course' AND Roll = '$roll' AND Subject = '$subject' ");
	echo "<table class='table'> ";
	echo "<tr>";echo "<th>"; echo"Date";echo"</th>";
	echo "<th>"; echo"Subject";echo"</th>";
	echo "<th>"; echo"Attendence"; echo"</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>";echo $row["date"]; echo "</td>";
	echo "<td>";echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo$row["Attendence"];echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	}
?>
</div>
</body>
</html>