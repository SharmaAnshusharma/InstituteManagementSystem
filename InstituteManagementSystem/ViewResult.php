<html>
<head>
<style>
body {
   background-image: url("sim.jpg");
 
}
</style>
<title>View Result </title>
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
<li><a href="AccessClassAssignment.php"><b style="font-size:20px">Class Assignments</b></a></li>
<li class="active"><a href="ViewResult.php"><b style="font-size:20px">View Result</b></a></li>
<li><a href="StudentUpload.php"><b style="font-size:20px">Upload</b></a></li>
</ul>

</div>
</nav>
<div style="float:right; padding-right:300px;">
<img src="ImgHome3.jpg" width="550px" height="550px" class="img-thumbnail">
</div>

<div class="container">
<ul class="list-group">
<li ><a href="ViewBCAResult.php" style="font-size:20px; text-decoration:none;">BCA Result</a></li>
<li ><a href="ALevelResultsem.php" style="font-size:20px; text-decoration:none;">A Level Result</a></li>
<li ><a href="OlLevelResult.php" style="font-size:20px; text-decoration:none;">O level Result</a></li>
</ul>
</div>
</body>
</html>