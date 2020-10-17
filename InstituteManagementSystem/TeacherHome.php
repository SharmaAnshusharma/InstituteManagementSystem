<html>
<head>
<style>
.carousel-inner{
  width:150%;
  max-height: 500px !important;
}
</style>

<title>Teacher Home Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php
include("bootstrap.php");
?>
</head>
<body>

<!--Navigation bar-->
<nav id="taecher" class="navbar navbar-inverse" title="Teacher Home">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<a href="TeacherHome.php" class="navbar-brand">Home -:</a></div>
<div class="collapse navbar-collapse" id="myNavbar">
<!--Dropdown Menu-->
<ul class="nav navbar-nav">
<li class="active"><a href="TeacherHome.php"><b style="font-size:20px">Teacher Home</b></a></li>
<li class="dropdown">
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b style="font-size:20px;">Students Admission</b>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="Admission.php">UG Admission</a></li>
<li><a href="ShortTermAdmission.php">Short Term Admission</a></li>
</ul>
<li><a href="FeesAccessByTeacher.php"><b style="font-size:20px">Fees</b></a></li>
<li><a href="TeacherSearchStudnetByCourse.php"><b style="font-size:20px">Search Students</b> </a></li>

<li><a href="TeacherUpload.php"><b style="font-size:20px">Upload</b></a></li>


</ul>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li><a href="loginHome.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</ul>
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
<img src="Images/student3.jpeg">
</div>
<div class="item ">
<img src="Images/img5.jpg ">

</div>
<div class="item">
<img src="Images/TeacherImg3.jpg">
</div>



<div class="item">
<img src="Images/TeacherImg4.jpg" width="100%">
</div>

</div>
<a class="left carousel-control" href="#carousel1" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span></a> 
<a class="right carousel-control" href="#carousel1" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span></a>
</div>
<script >
$(document).ready(function(){
	$("#teacher").tooltip({show: {effect: "explode", duration: 600}});
	
	
});
</script>

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
	<a href="TeacherSearchStudnetByCourse.php" class="btn btn-primary">Search Student</a>
	<a href="TeacherUpload.php" class="btn btn-primary">Upload Notice</a>
	
	
	<img src="Images/i10.jpg" width="800px" height="500px" class="img-thumbnail"><br/>
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
