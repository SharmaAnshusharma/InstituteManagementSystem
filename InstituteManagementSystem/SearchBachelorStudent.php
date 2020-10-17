
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
<body>
<div class="container-fluid">
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="#" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li ><a href="StudentSearchByCourse.php">Search By Course</a></li>
<li class="active"><a href="searchStudentByRoll.php">Search By Roll Number</a></li>
<li><a href="searchShortStudentByRoll.php">Search Short Students</a></li>

</ul>
</nav>
<br/>
<div class="container">
<?php
	$roll=$_POST['roll'];
	
	if(empty($roll))
	{
		echo "<script>alert('Roll Number Required')</script>";
	echo "<script>window.location='searchStudentByRoll.php'</script>";
	return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$roll))
	{
		echo "<script>alert('Only Numeric Values are allowed in Roll Number ')</script>";
		echo "<script>window.location='searchStudentByRoll.php'</script>";
		return false;
		
	}
	}
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `ugstudentform` WHERE `ID` ='$roll'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";

	while($row=mysqli_fetch_array($res))
	{echo "<tr>";
	echo "<th>"; echo "Student Adhar"; echo "</th>";echo "<td>";echo "<img src='Stu_Tea_Image/".$row['UG Student Adhar']." ' width='100px' height='100px' >";echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo " Student Image"; echo "</th>";echo "<td>";echo "<img src='Stu_Tea_Image/".$row['UG Student Image']." ' width='100px' height='100px' >";echo "</td>";
echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "ID"; echo "</th>";echo "<td>"; echo $row["ID"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Date"; echo "</th>";	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "First Name"; echo "</th>";echo "<td>"; echo $row["First Name"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Last Name"; echo "</th>";echo "<td>"; echo $row["Last Name"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "DOB"; echo "</th>";echo "<td>"; echo $row["DOB"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Gender"; echo "</th>";echo "<td>"; echo $row["Gender"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Email"; echo "</th>";echo "<td>"; echo $row["Email"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Contact"; echo "</th>";echo "<td>"; echo $row["Contact"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Address"; echo "</th>";echo "<td>"; echo $row["Address"]; echo "</td>";
	echo "<tr>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Father Name"; echo "</th>";echo "<td>"; echo $row["Father Name"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Father Contact"; echo "</th>";echo "<td>"; echo $row["Father Contact"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Intermediate"; echo "</th>";echo "<td>"; echo $row["I Stream"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";	
	echo "<th>"; echo "Board"; echo "</th>";echo "<td>"; echo $row["I Board"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Year"; echo "</th>";echo "<td>"; echo $row["I Year"]; echo "</td>";
	echo "</tr>";
	echo "<th>"; echo "Percentage"; echo "</th>";echo "<td>"; echo $row["I Percentage"]; echo "</td>";
	echo "<tr>";
	echo "<th>"; echo "High School"; echo "</th>";echo "<td>"; echo $row["H Stream"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Board"; echo "</th>";echo "<td>"; echo $row["H Board"]; echo "</td>";
	echo "<tr>";
	echo "<th>"; echo "Year"; echo "</th>";echo "<td>"; echo $row["H Year"]; echo "</td>";
	echo "<tr>";
	echo "<th>"; echo "Percentage"; echo "</th>";echo "<td>"; echo $row["H Percentage"]; echo "</td>";
	echo "</tr>";
	}
echo "</table>";
echo "</div>";

?>
</div>