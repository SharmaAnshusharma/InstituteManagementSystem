<html>
<head>
<title>Access Class Schedule</title>
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
<div class=" bg" style="height:500px;">
<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="#" class="navbar-brand">
Home -:</a>
</div>
<ul class="nav navbar-nav">
<li><a href="AccessClassAssignment.php">Class Assignment</a></li>
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
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>BCA Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";

	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "A Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>A Leveel Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "O Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>O Level Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<center>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "PHP with MYSQL":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo "<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>PHP with MySQL Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "Asp.NET C#":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Asp.NET C# Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "Web Designing":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Web Designing Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "C":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>C Language Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
	break;
echo "</table>";
echo "</div>";

	case "C++":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>C++ Language Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
	break;
echo "</table>";
echo "</div>";

	case "Java":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Java Language Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
	break;
echo "</table>";
echo "</div>";

	case "Python":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Python Language Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
	break;
echo "</table>";
echo "</div>";

	case "Hardware":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Hardware Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	case "Networking":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
	echo"<center>";
	echo "<h1>Institute Of Computer Education</h1>";
	echo "<h3>Networking Class Assignment</h3>";
	echo "</center>";
	echo "<br/><br/>";
	
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Assignment"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Completion Date"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Assignment"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

	break;
	
	
	
	default:
	echo "<script>alert('Wrong Keyword')</script>";
	}
}
?>
