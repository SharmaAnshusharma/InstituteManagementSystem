
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
<div class="navbar-header"><a href="#" class="navbar-brand">ICE</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Search Information</a></li>
<li><a href="#">Search By Course</a></li>
<li><a href="#">Search By ID</a></li>
</ul>
</nav><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1><center><h1>Search Student Details</h1></center></h1></div>
<div class="panel panel-body">
<form method="post">
<a href="#" data-toggle="popover" title="Note" data-content="Search keywords like Student Details">First Click Here</a>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</br></br>
<input type="text" name="Course" class="form-control"> <br/><br/>
<input type="submit" name="reset" value="Reset" class="btn btn-primary">
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
<br/><br/>
</body>
</html>
<div class="container-fluid">
<?php
if(isset($_POST['submit1']))
{ 
	$Course=$_POST['Course'];
	switch($teacher)
	{
		case "Student Details":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `ugstudentform` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "ID"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "First Name"; echo "</th>";
	echo "<th>"; echo "Last Name"; echo "</th>";
	echo "<th>"; echo "DOB"; echo "</th>";
	echo "<th>"; echo "Gender"; echo "</th>";
	echo "<th>"; echo "Email"; echo "</th>";
	echo "<th>"; echo "Contact"; echo "</th>";
	echo "<th>"; echo "Address"; echo "</th>";
	echo "<th>"; echo "Father Name"; echo "</th>";
	echo "<th>"; echo "Father Contact"; echo "</th>";
	echo "<th>"; echo "Intermediate"; echo "</th>";
	echo "<th>"; echo "Board"; echo "</th>";
	echo "<th>"; echo "Year"; echo "</th>";
	echo "<th>"; echo "Percentage"; echo "</th>";
	echo "<th>"; echo "High School"; echo "</th>";
	echo "<th>"; echo "Board"; echo "</th>";
	echo "<th>"; echo "Year"; echo "</th>";
	echo "<th>"; echo "Percentage"; echo "</th>";
	echo "<th>"; echo "UG Student Adhar"; echo "</th>";
	echo "<th>"; echo "UG Student Image"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["ID"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["First Name"]; echo "</td>";
	echo "<td>"; echo $row["Last Name"]; echo "</td>";
	echo "<td>"; echo $row["DOB"]; echo "</td>";
	echo "<td>"; echo $row["Gender"]; echo "</td>";
	echo "<td>"; echo $row["Email"]; echo "</td>";
	echo "<td>"; echo $row["Contact"]; echo "</td>";
	echo "<td>"; echo $row["Address"]; echo "</td>";
	echo "<td>"; echo $row["Father Name"]; echo "</td>";
	echo "<td>"; echo $row["Father Contact"]; echo "</td>";
	echo "<td>"; echo $row["I Stream"]; echo "</td>";
	echo "<td>"; echo $row["I Board"]; echo "</td>";
	echo "<td>"; echo $row["I Year"]; echo "</td>";
	echo "<td>"; echo $row["I Percentage"]; echo "</td>";
	echo "<td>"; echo $row["H Stream"]; echo "</td>";
	echo "<td>"; echo $row["H Board"]; echo "</td>";
	echo "<td>"; echo $row["H Year"]; echo "</td>";
	echo "<td>"; echo $row["H Percentage"]; echo "</td>";
	echo "<td>"; echo $row["UG Student Adhar"]; echo "</td>";
	echo "<td>"; echo $row["UG Student Image"]; echo "</td>";
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
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
</div>