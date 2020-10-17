<html>
<head>
<title>Login Page</title>
<style>
</style>
<?php
include("bootstrap.php");
?>
</head>
<body class="bg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>     
     <div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-right">
    <li><a href="Admin.php"><b style="font-size:20px;">Admin Login</b></a></li>
<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li> 
 </ul>
  </div>
</nav>
<br/>
<!--Nav Bar -->
<div class="container-fluid">
<!--Logo and marquee-->
<center><h1 style="color:black;"><u>WELCOME TO ICE</u></h1>
</center>
<div class="container">
<marquee behavior="alternate" style="font-size:20px">Welcome to the Login Pannel of the Institute of Computer Education.</marquee>
</div>
<br/><br/>
<!--Login Image Table -->
<br/><br/>

<table width="100%" class="table" style="text-align:center;">
<tr>
<td><a href="Teacherlogin.php"><img src="Images\TeacherImg1.jpg" width="200px" id="img2" height="200px" title="Teachers"style="border-radius:25px"></a><h3>Teacher's Login</h3></td>
<td><a href="studentLogin.php"><img src="Images\StudentImg.jpg" width="200px" id="img3" height="200px" title="Students"style="border-radius:25px"></a><h3>Student's Login</h3></td>
</tr>
</table>
<hr>
<!--Jquery UI tooltip Method with explode effect -->

<script>
 $(document).ready(function(){
	 $("#img1").tooltip({show: {effect: "explode", duration: 600}});
	 
	 $("#img2").tooltip({show: {effect: "explode", duration: 600}});
	 $("#img3").tooltip({show: {effect: "explode", duration: 600}});
	 
 });
</script>

<br><br><br>
<?php
include("footer.php");
?>
</body>
</div>
</html>