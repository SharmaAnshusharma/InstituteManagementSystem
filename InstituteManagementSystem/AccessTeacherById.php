
<html>
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
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">
<li><a href="TeacherDetails.php">Search Information</a></li>
<li><a href="TeacherSearchByName.php">Search By Name</a></li>
<li class="active"><a href="TeacherSearchById.php">Search By ID</a></li>
</ul>
</nav>
<br/>
</div>
<div class="container">
<?php
if(isset($_POST['submit1']))
{ 
	$teacherID=$_POST['TeacherID'];
	if(empty($teacherID))
	{
		echo "<script>alert('Teacher ID Required')</script>";
	echo "<script>window.location='TeacherSearchById.php'</script>";
	return false;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$teacherID))
	{
		echo "<script>alert('Only Numeric Values are allowed in Teacher ID ')</script>";
		echo "<script>window.location='TeacherSearchById.php'</script>";
		return false;
		
	}
	}
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `teacherform` WHERE `ID`= '$teacherID' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<th>"; echo "Adhar"; echo "</th>";echo "<td>";echo "<img src='Stu_Tea_Image/".$row['Adhar']." ' width='100px' height='100px' >";echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Image"; echo "</th>";echo "<td>";echo "<img src='Stu_Tea_Image/".$row['Image']." ' width='100px' height='100px' >";echo "</td>";
echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "ID"; echo "</th>";echo "<td>"; echo $row["ID"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "First Name"; echo "</th>";echo "<td>"; echo $row["First Name"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Last Name"; echo "</th>";echo "<td>"; echo $row["Last Name"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Email"; echo "</th>";echo "<td>"; echo $row["Email"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Contact"; echo "</th>";	echo "<td>"; echo $row["Contact"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Address"; echo "</th>";echo "<td>"; echo $row["Address"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Master Degree"; echo "</th>";echo "<td>"; echo $row["M Stream"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "University"; echo "</th>";echo "<td>"; echo $row["M University"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Year"; echo "</th>";echo "<td>"; echo $row["M Year"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Percentage"; echo "</th>";echo "<td>"; echo $row["M Percentage"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Bachelor Degree"; echo "</th>";echo "<td>"; echo $row["B Stream"]; echo "</td>";
	echo "</tr>";
	echo "<th>"; echo "University"; echo "</th>";echo "<td>"; echo $row["B University"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Year"; echo "</th>";echo "<td>"; echo $row["B Year"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Percentage"; echo "</th>";echo "<td>"; echo $row["B Percentage"]; echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>"; echo "Specilization"; echo "</th>";echo "<td>"; echo $row["Specilization"]; echo "</td>";
	echo "<tr>";
	echo "<th>"; echo "Salary"; echo "</th>";echo "<td>"; echo $row["Salary"]; echo "</td>";
	echo "</tr>";
	}
	
	echo "</table>";
	echo "</div>";

}
?>
</div>