<html>
<head>
<style>
.carousel-inner{
  width:100%;
  max-height: 600px !important;
}
</style>
<title>Students Home Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
<li class="active"><a href="StudentHome.php"><b style="font-size:20px;">Student Home</b></a></li>
<li><a href="AccessClassSchedule.php"><b style="font-size:20px;">Class Schedule</b></a></li>
<li><a href="AccessClassAssignment.php"><b style="font-size:20px;">Class Assignments</b></a></li>
<li><a href="ViewResult.php"><b style="font-size:20px;">View Result</b></a></li>
<li><a href="ViewAttendence.php"><b style="font-size:20px;">View Attendence</b></a></li>
<li><a href="StudentUpload.php"><b style="font-size:20px;">Upload</b></a></li>
</ul>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li><a>Hey,Students</a></li>
<li><a href="loginHome.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</ul>
</div>
</div>
</nav>
</div>

<br/>
<div class="carousel slide" id="carousel1" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel1" data-slide-to="0" class="active"> </li>
<li data-target="#carousel1" data-slide-to="1"> </li>
<li data-target="#carousel1" data-slide-to="2"> </li>
<li data-target="#carousel1" data-slide-to="3"> </li>
</ol>
<div class="carousel-inner">

<div class="item active">
<img src="Images/student.jpg"  >
</div>
<div class="item">
<img src="Images/img1.jpg">
</div>
<div class="item">
<img src="Images/img2.jpg">
</div>
<div class="item">
<img src="Images/img6.jpg">
</div>

</div>
<a class="left carousel-control" href="#carousel1" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span></a> 
<a class="right carousel-control" href="#carousel1" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span></a>
</div>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-body"><center><h1 style="font-size:30px; font-weight:bold;">Welcome, Teacher.</h1><br/>
	<h4>What Would you like to do Today!</h4>
	</center>
	</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body"></div>
	<center>
	<section style="background-color:gray;">
	
	<a href="StudentUpload.php" class="btn btn-primary">Upload Application</a>
	<a href="AccessClassAssignment.php" class="btn btn-primary">Download Assignment</a>
	<a href="AccessClassSchedule.php" class="btn btn-primary">Download Schedule</a>
	<img src="Images/i9.jpg" width="800px" height="500px" class="img-thumbnail"><br/>
	</section>
	<br/><br/><br/>
  </center>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"><img src="Images\logo.jpg" width="100px" hight="100px" class="img-thumbnail"></div>
        <p>ICE Training Center offers training in both<br/> software, Hardware, Networking and Management<br/> courses with industry experienced. The best computer<br/> center in Lucknow</P>
        <p><i ></i> Lucknow</p>
        <p><i></i> Phone (India) : +918604939407</p>
        <p><i></i> E-mail : ice@gmail.com</p>
        
      </div>
     
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>Admission Life Cycle for Short Term Course</p>
          <p>Technical WorkShops</p>
          <p>Best Teacher Staffs</p>
        </div>
      </div>
     
    </div>
  </div>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - All Rights with ICE</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="AboutUs.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>
        
      </ul>
    </div>
  </div>
</div>
</footer>

</body>


</html>
