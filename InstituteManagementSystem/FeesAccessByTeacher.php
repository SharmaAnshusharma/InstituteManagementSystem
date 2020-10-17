<html>
<head>
<style>

</style>
<title>Fees</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="TeacherHome.php" class="navbar-brand">Home -:</a>
</div>

<ul class="nav navbar-nav">
<li class="active"><a href="Fees.php"><b style="font-size:20px">Course Fees</b> </a></li>

</ul>

</nav>
<br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Search Fees</h1></center></div>
<div class="panel panel-body">
<form method="post" action="AccessFeesByTeacher.php">
</br></br>
<i><b>Select Course Fees</b></i>
<select name="course"class="form-control">
<option value="FormalCourse" >Formal Course</option>
<option value="NonFormalCourse">Non Formal Course</option>
<option value="ShortTermCourse">Short Term Course</option>
</select>
 <br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
