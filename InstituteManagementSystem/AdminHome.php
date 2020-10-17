<html>
<head>
<title>Admin Home Page</title>
<?php
include("bootstrap.php");

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.carousel-inner > .item > img {
  width:1525px;
  height:500px;
}
.carousel {
  width:1525px;
  height:500px;
}
</style>
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
<a href="#" class="navbar-brand">
Home -:</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<!--Dropdown Menu-->
<ul class="nav navbar-nav">
<li class="active"><a href="AdminHome.php"><b style="font-size:20px">Admin Home</b></a></li>
<!--Dropdown Menu-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown"  href="#"><b style="font-size:20px">Add</b>
<span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li> <a href="AddTeacher.php">Add Teacher</a></li>
<li> <a href="AddCourse.php">Add Course</a></li>
</ul>
</li>
<li><a href="Fees.php"><b style="font-size:20px">Course Fees</b></a></li>
<li><a href="AdminUpload.php"><b style="font-size:20px">Upload</b></a></li>
<li><a href="AccessEnquery.php"><b style="font-size:20px">Access Enquery</b></a></li>
<li><a href="Register.php"><b style="font-size:20px">Register</b></a></li>
</ul>
<div class="container-fluid">
<ul class="nav navbar-nav navbar-right">
<li><a href="loginHome.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
</ul>
</div>
</div>
</nav>
<div class="carousel slide" id="carousel1" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel1" data-slide-to="0" class="active"> </li>
<li data-target="#carousel1" data-slide-to="1"> </li>
<li data-target="#carousel1" data-slide-to="2"> </li>
<li data-target="#carousel1" data-slide-to="3"> </li>
</ol>
<div class="carousel-inner">

<div class="item active">
<img src="Images/img13.jpg"  width="800" height="600"  >
</div>
<div class="item">
<img src="Images/img12.jpg" width="800" height="600">
</div>
<div class="item">
<img src="Images/img11.jpg" width="800" height="600">
</div>
<div class="item">
<img src="Images/img14.jpg" width="800" height="600">
</div>

</div>
<a class="left carousel-control" href="#carousel1" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span></a> 
<a class="right carousel-control" href="#carousel1" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span></a>
</div>
<hr>


<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-body"><center><h1 style="font-size:30px; font-weight:bold;">Welcome, Administrator.</h1><br/>
	<h4>What Would you like to do Today!</h4>
	</center>
	</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body"></div>
	<center>
	<section style="background-color:gray;">
	<a href="AccessEnquery.php" class="btn btn-primary">Access Enquery</a>
	<a href="AdminUpload.php" class="btn btn-primary">Upload Notice</a>
	<a href="AccessEnquery.php" class="btn btn-primary">Access Enquery</a>
		<img src="Images/img15.jpg" width="800px" height="500px" class="img-thumbnail"><br/>
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
</footer>
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
