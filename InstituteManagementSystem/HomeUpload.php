<?php
if(isset($_POST["submit1"]))
{
$name=$_POST["name"];
$date=$_POST["date"];
$file_name=$_FILES["teacherFile"]["name"];
$file_tmp_name=$_FILES["teacherFile"]["tmp_name"];
$file_type=$_FILES["teacherFile"]["type"];
$file_size=$_FILES["teacherFile"]["size"];
$store="UploadResume/".$file_name;

if ($file_type != "application/msword") 
{
	if(move_uploaded_file($file_tmp_name,$store))
	{ 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");

	mysqli_query($link,"INSERT INTO `uploadresume`(`Name`, `Date`, `File`) VALUES ('$name','$date','$store')");
	echo "<script>alert('File Uploaded Successfully')</script>";
	}

	else
	{
		echo "<script>alert('Please Try again!')</script>";
	}
}
else
{
	echo "You Can Upload Only Doc file";
}
}
?>
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
footer { background-color:#0c1a1e; min-height:350px; font-family: 'Open Sans', sans-serif; }
.footerleft { margin-top:50px; padding:0 36px; }
.logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

.footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
.footerleft p i { width:20px; color:#999;}


.paddingtop-bottom {  margin-top:50px;}
.footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
.footer-ul li { line-height:29px; font-size:12px;}
.footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
.footer-ul i { margin-right:10px;}
.footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 
 

 
 .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
 .icon-ul li { line-height:75px; width:100%; float:left;}
 .icon { float:left; margin-right:5px;}
 
 
 .copyright { min-height:40px; background-color:#000000;}
 .copyright p { text-align:left; color:white; padding:10px 0;}
 .heading7 { font-size:21px; font-weight:700; color:gray; margin-bottom:22px;}
 .post p { font-size:12px; color:white; line-height:20px;}

 .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
 .bottom_ul li { float:left; line-height:40px;}
 .bottom_ul li:after { content:"/"; color:white; margin-right:8px; margin-left:8px;}
 .bottom_ul li a { color:white;  font-size:12px;}


</style>
<title>Upload Resume</title>
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
<body style="background-color:gray;">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
</div>     
     <div class="collapse navbar-collapse" id="myNavbar">
<img src="Images\logo.jpg" width="100px" height="100px" class="img-thumbnail">
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="ICEHome.php">Home</a></li>
      <li><a href="CourseAndEligibility.php">Course& Eligibility</a></li>
	<li><a href="Enquery.php">Enquery</a></li>
    <li><a href="loginHome.php">Login</a></li>
	<li  class="active"><a href="HomeUpload.php">Upload</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="AboutUs.php">About Us</a></li>
    </ul>
  </div>
</nav>
<br/><br/>
<center>
<h1 style="color:#fff">Upload Resume</h1>
<hr>
</center>
<div class="container">
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group">
<lable for="Name"><b>Candiate Name</b></lable>
<input type="text" name="name" class="form-control" placeholder=" Name.."/> 
</div>
<lable for="Name"><b>Date</b></lable>
<input type="date" name="date" class="form-control" placeholder="Date.."/><br/> 
<input type="file" name="teacherFile"><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form> 
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