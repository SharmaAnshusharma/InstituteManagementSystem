<?php
if(isset($_POST['submit1']))
{	session_start();
	$name=$_POST['name'];
	$_SESSION['name']=$name;
	$email=$_POST['email'];
	$_SESSION['email']=$email;
	$contact=$_POST['contact'];
	$_SESSION['contact']=$contact;
	$message=$_POST['message'];
	$_SESSION['message']=$message;
	$date=$_POST['date'];
	$_SESSION['date']=$date;
	// First Name validation
if(empty($name))
{
echo "<script>alert('First Name required')</script>";	
	echo "<script>window.location='Enquery.php'</script>";
	return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		echo "<script>alert('Only Letter are Required') </script>";
	echo "<script>window.location='Enquery.php'</script>";
	return false;
	}
}
if (strlen($name) < 3)
{
   echo "<script>alert('First Name Input is too short, minimum is 3 characters (12 max).')</script>";
echo "<script>window.location='Enquery.php'</script>";
	return false;
   }
elseif(strlen($name) > 12)
{
   echo "<script>alert('First Name is too long, maximum is 12 characters.')</script>";
	echo "<script>window.location='Enquery.php'</script>";
	return false;
   }
//date validation
   if(empty($date))
	{
	echo "<script>alert('Date Require')</script>";
	echo "<script>window.location='Enquery.php'</script>";
	return false;
	}
//contact validation
	if(empty($contact))
	{
		echo "<script>alert('Number Required')</script>";
	return false;
	}else{
	
	if(strlen($contact)< 10)
	{
		echo "<script>alert('phone number should be minimum 10 digit')</script>";
	return false;
	}
	else
	{
		if (filter_var($contact, FILTER_VALIDATE_INT))
			{
		    echo"<script>alert('Only Integer value is Required')</script>";
			return false;
			}
			
	}
	}	
	//Database connecttivity
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$ins=mysqli_query($con,"INSERT INTO `enquerytable`(`Name`, `Email`, `Contact`,`Date`, `Message`) VALUES ('$name','$email','$contact','$date','$message')");
	if($ins==true)
	{
		echo "<script>alert('Request Submitted Successfully')</script>";
		echo "<script>window.location='EnqueryMessage.php'</script>";
	}
	else
	{
		echo "<script>alert('Failed Try Again')</script>";
	}
}
?>
<html>
<head>
<style>

</style>
<title>Enquery </title>
<?php
include("bootstrap.php");
?>
</head>
<body  style="background-color:gray;">

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
       <li ><a href="index.php"><b style="font-size:20px;">Home</b></a></li>
      <li ><a href="CourseAndEligibility.php"><b style="font-size:20px;">Course& Eligibility</b></a></li>
	<li class="active"><a href="Enquery.php"><b style="font-size:20px;">Enquery</b></a></li>
  <li><a href="contact.php"><b style="font-size:20px;">Contact Us</b></a></li>
	<li><a href="AboutUs.php"><b style="font-size:20px;">About Us</b></a></li>
    </ul>
  </div>
</nav><br>
<div class="container">
<center><h1 style="color:#fff">Send Enquery</h1>
<hr>
</center>
<form method="post" action="">
<div class="form-group">
<lable for=" Name"><b> Name</b></lable>
<input type="text" name="name" Placeholder="Name..." class="form-control"required>
</div>
<div class="form-group">
<lable for="Email"><b>Email</b></lable>
<input type="email" name="email" class="form-control" placeholder="Email..."required>
</div>
<div class="form-group">
<lable for="Contact"><b>Contact</b></lable>
<input type="tel" name="contact" class="form-control" placeholder="+91 **********..."required>
</div>
<div class="form-group">
<lable for="Date"><b>Date</b></lable>
<input type="date" name="date" class="form-control" placeholder="..."required>
</div>
<lable for="message"><b>Message</b></lable>
<div class="form-group">
<textarea cols="20" rows="5" name="message" class="form-control"required></textarea>
</div>
<input type="submit" value="Reset" name="reset" class="btn btn-primary">
<input type="submit" value="Submit" name="submit1" class="btn btn-primary">
</div>
<?php
include("footer.php");
?></body>
</html>
