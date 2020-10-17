<html>
<head>
<style>

</style>
<title>Access Class Assignment</title>
<?php
include("bootstrap.php");
?>
</head>
<body>


<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<a href="StudentHome.php" class="navbar-brand">Home -:</a></div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li><a href="StudentHome.php"><b style="font-size:20px">Student Home</b></a></li>
<li><a href="AccessClassSchedule.php"><b style="font-size:20px">Class Schedule</b></a></li>
<li class="active"><a href="AccessClassAssignment.php"><b style="font-size:20px">Class Assignments</b></a></li>
<li><a href="ViewResult.php"><b style="font-size:20px">View Result</b></a></li>
<li><a href="StudentUpload.php"><b style="font-size:20px">Upload</b></a></li>
</ul>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li><a href="loginHome.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</ul>
</div>
</div>
</nav>
</div>

<br/><br/>
<div class="container">
<form method="post" action="StudentAccessClassAssi.php">
<div class="form-group">
<lable for="Course"><b>Course:</b></lable>
<select name="course" class="form-control">
<option>Select Any Course</option>
<option value="BCA">BCA</option>
<option value="A Level">A Level</option>
<option value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="Asp.NET C#">Asp.NET C#</option>
<option value="Web Designing">Web Designing</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java">Java</option>
<option value="Python">Python</option>
<option value="Hardware">Hardware</option>
<option value="Networking">Networking</option>
</select>
</div>

<input type="submit" name="submit1" value="Click Here To Download" class="btn btn-success"/>
</form>

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
	case "A Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "O Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "PHP with MYSQL":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Asp.NET C#":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Web Designing":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "C":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "C++":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Java":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Python":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Hardware":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	case "Networking":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `teacheruploadclassass` WHERE `Course`='$course'");
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
	
	
	
	default:
	echo "<script>alert('Wrong Keyword')</script>";
	}
	echo "</div>";
	echo "</table>";
}
?>
</div>
 <ul class="pager">
  <li><a href="StudentHome.php">Previous</a></li>
 </ul> 

</body>
</html>