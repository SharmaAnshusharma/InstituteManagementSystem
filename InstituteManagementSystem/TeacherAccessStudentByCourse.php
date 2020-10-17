

<html>
<head>
<style>

</style>
<title>Student Details</title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<div class="container-fule">
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="#" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">

<li class="active"><a href="TeacherAccessStudentByCourse.php"><b style="font-size:20px;">Search By Course</b></a></li>
</ul>
</nav><br/>
<div class="container">
<?php
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
	echo "<td>"; echo $row["I Stream"]; echo "</td>";
	echo "</tr>";
	}
	
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
	
	break;
	default:
	echo "<script>alert('Your Keywords is worng!!')</script>";
	
	}
	echo "</table>";
	echo "</div>";
}
?>
</div>
