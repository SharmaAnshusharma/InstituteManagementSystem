
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
<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="#" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">

<li class="active"><a href="StudentSearchByCourse.php"><b style="font-size:20px">Search By Course</b></a></li>



</ul>
</nav><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Search Student By Course</h1></center></div>
<div class="panel panel-body">
<form method="post" action="TeacherAccessStudentByCourse.php">
</br></br>
<b><i>Select One Course:</i></b>
<div class="form-group">
<select name="Course" class="form-control">
<option value="BCA">BCA</option>
<option value="A Level">A Level</option>
<option value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="Asp.NET C#">Asp.NET C#</option>
<option value="Web Designing">Web Designing (HTML, CSS, JS)</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java (Core)">Java</option>
<option value="Python">Python</option>
<option value="Hardware">Hardware</option>
<option value="Networking">Networking</option>
</select>
<br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
<br/><br/>
</body>
</html>
