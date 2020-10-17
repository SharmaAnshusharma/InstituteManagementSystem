<?php
include("ClassScheduleValidation.php");
?>


<html>
<head>
<title>Class Schedule</title>
<?php
include("bootstrap.php");
?>
<style>
</style>
</head>
<body><div class="container-fule">
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li><a href="adminUpload.php"><b style="font-size:20px;">Upload Important Notices</b></a></li>
<li class="active"><a href="ClassSchedule.php"><b style="font-size:20px;">Upload Schedule</b></a></li>
<li><a href="Subject.php"><b style="font-size:20px;">All Subject</b></a></li>

</ul>
</nav>
<br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Upload Class Schedule</h1></center></div>
<div class="panel panel-body">
<form method="post" action="">
<div class="form-group">

<div class="form-group">
<lable for="Ssession"><b>Session</b></lable>
<input type="text" name="session" class="form-control"/ placeholder="Session...">
</div>
<lable for="Course"><b>Course</b></lable>
<select class="form-control" name="Course">
<option>Select Any Course</option>
<option Value="BCA" >BCA</option>
<option Value="A Level">A Level</option>
<option Value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="ASP.NET C#">ASP.NET C#</option>
<option value="Web Designing">Web Designing</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java">Java</option>
<option value="Python">Python</option>
</select>
</div>
<div class="form-group">
<lable for="Subject"><b>Subject</b></lable>
<input type="text" name="subject" class="form-control"/ placeholder="Subject...">
</div>
<div class="form-group">
<lable for="Teacher"><b>Teacher</b></lable>
<input type="text" name="teacher" class="form-control"/ placeholder="Teacher Name...">
</div>
<div class="form-group">
<lable for="Time"><b>Time</b></lable>
<input type="time" name="time" class="form-control"/ placeholder="Time...">
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]" value="Mon">Mon
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]"value="Tue" >Tue
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]" value="Wed" >Wed
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]" value="Thu">Thus
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]"value="Fri">Fri
</div>
<div class="checkbox-inline">
<input type="checkbox" name="d[]" value="Sat" >Sat
</div>
<br/><br/>
<input type="submit" name="reset" value="Reset" class="btn btn-primary"/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary"/>
</form>
</div>
</div>
</div>
</body>
<ul class="pager">
<li><a href="AdminHome.php">Previous</a></li>
</ul>
</div>
</html>