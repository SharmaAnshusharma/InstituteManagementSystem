<html>
<head>
<style>
</style>
<title>Attendence</title>
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
<a href="TeacherHome.php" class="navbar-brand">Home-:</a>
</div>
<div class="container-fluid">
<ul class="nav navbar-nav">
<li class="active"><a href="Attendence.php">Student Attendence</a></li>
</ul>
</div>
</nav>
<br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Student Attendence</h1></center></div>
<div class="panel panel-body">
<form method="post" action="Attendence.php">
<b>Select Select Course</b>
<div class="form-group">
<input type="text" name="course" placeholder="Course..." class="form-control">
</div>
<b>Student Roll Number</b>
<div class="form-group">
<input type="text" name="roll" placeholder="Roll..." class="form-control">
</div>
<b>Student Name</b>
<div class="form-group">
<input type="text" name="Stu_name" placeholder="Student Name..." class="form-control">
</div>
<b>Student Subject</b>
<div class="form-group">
<input type="text" name="Stu_sub" placeholder="Subject..." class="form-control">
</div>
<b>Date</b>
<div class="form-group">
<input type="date" name="date" class="form-control">
</div>
<b>Select Attendence</b>
<div class="form-group ">
<select class="form-control" name="attendence">
<option value="P">Present</option>
<option value="A">Absent</option>
<option value="L">Leave</option>
</select>
</div>
<input type="submit" name="reset" value="Reset" class="btn btn-danger">
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit1']))
{
$course=$_POST['course'];
$roll=$_POST['roll'];
$Stu_name=$_POST['Stu_name'];
$Stu_sub=$_POST['Stu_sub'];
$date=$_POST['date'];
$attendence=$_POST['attendence'];
$con=mysqli_connect("localhost","root","","iceproject");
$ins=mysqli_query($con,"INSERT INTO `attendence`(`Course`, `Roll`, `Name`, `Subject`, `date`, `Attendence`) VALUES ('$course','$roll','$Stu_name','$Stu_sub','$date','$attendence')");
if($ins==true)
{
	echo "<script>alert('Attendence Inserted Successfully.')</script>";
}
else
{
	echo "<script>alert('Not Inserted Try Again.!!')</script>";
}
}
?>





