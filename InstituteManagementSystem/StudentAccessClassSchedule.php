
<html>
<head>
<style>
</style>
<title>Student Details</title>
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
<body><div class="container-fluid">
<div class=" bg" style="height:500px;">
<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="#" class="navbar-brand">
Home -:</a>
</div>
<ul class="nav navbar-nav">
<li><a href="AccessClassSchedule.php">Class Schedule</a></li>
</ul>
</nav>
<?php
if(isset($_POST['submit1']))
{
	$course=$_POST["course"];
	switch($course)
	{
		case "BCA":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>BCA Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
	echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	case "A Level":
	
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>A Level Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "O Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>O Level Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "PHP with MYSQL":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>PHP with MYSQL Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Asp.NET C#":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Asp.NET C# Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Web Designing":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Web Designing Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "C":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>C Language Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "C++":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>C++ Language Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Java":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Java Language Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Python":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Python Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Hardware":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Hardware Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";

	break;
	
	case "Networking":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Networking Class Schedule</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	
	echo "<tr>";
	echo "<th>"; echo "Session"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Session"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
		echo "<tr>";
	echo "<td>";
	echo "<button type='button' class='btn btn-success' onclick='print()'><span class='glyphicon glyphicon-print'>Print</span></button>";
	echo "<script>
	function print()
	{
	window.print();
	}
	</script>";
	echo "</td>";
	echo "</tr>";
	break;
	default: 
	echo "<script>alert('This is default')</script>";
	echo "</div>";
	echo "</table>";

	}
}
?>
</div>
</body>
</html>