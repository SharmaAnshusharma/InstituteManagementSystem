

<html>
<head>
<style>
body {
   background-image: url("back1.png");
 
}

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
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">

<li class="active"><a href="StudentSearchByCourse.php">Search By Course</a></li>
<li><a href="searchStudentByRoll.php">Search By Roll Number</a></li>
</ul>
</nav><br/><?php
if(isset($_POST['submit1']))
{ 
	$Course=$_POST['Course'];
	switch($Course)
	{
	case "A Level":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `ugstudentform` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "O Level":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `ugstudentform` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
;
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	break;
	case "BCA":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `ugstudentform` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	break;
	case "PHP with MYSQL":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "Asp.NET C#":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "Web Designing":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "C":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "C++":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	break;
	case "Java":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "Python":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "Hardware":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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
	echo "</tr>";
	}
	echo "<form method='post' action='DeleteStudentDetails.php'>";
	echo "<td><input type='submit' value='Delete Records' class='btn btn-danger'></td>";
	echo "</form>";
	
	break;
	case "Networking":
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shstudentfrom` WHERE Course ='$Course'");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
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