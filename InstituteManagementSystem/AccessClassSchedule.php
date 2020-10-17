<html>
<head>
<style>

</style>
<title>Access Class Schedule</title>
<!---->
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
<li class="active"><a href="AccessClassSchedule.php"><b style="font-size:20px">Class Schedule</b></a></li>
<li><a href="AccessClassAssignment.php"><b style="font-size:20px">Class Assignments</b></a></li>
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
<form method="post" action="StudentAccessClassSchedule.php">
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
</div>
</div>
 </body>

</html>