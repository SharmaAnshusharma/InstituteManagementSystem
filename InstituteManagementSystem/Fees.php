<html>
<head>
<style>
body {
   background-image: url("back1.png");
   
}
</style>
<title>Fees</title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<div class="container-fule">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="AdminHome.php" class="navbar-brand">Home -:</a>
</div>
<ul class="nav navbar-nav">

<li class="active"><a href="Fees.php"><b style="font-size:20px">Course Fees </b></a></li>

</ul>
</nav>
<div class="container">
<br/><br/><br/>
<div class="panel panel-default col-sm-8" style="margin-left:200px">
<div class="panel panel-heading"  style="border-radius:25px 50px 30px;"><h3>Search Fees</h3></div>
<div class="panel panel-body">
<form method="post" action="FeesAccessByAdmin.php">
</br></br>
<select name="course" class="form-control">
<option>Formal Course</option>
<option>Non-Formal Course</option>
<option>Short Term Course</option>
</select>
<br/><br/>
<a href="AdminHome.php"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
<ul class="pager">
  <li><a href="AdminHome.php">Previous</a></li>
 </ul>



 