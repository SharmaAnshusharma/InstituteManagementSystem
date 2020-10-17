<html>
<head>
<style>
 p{
	color:white;
	font:20px;
}

</style>
<title>Contact US</title>
<?php
include("bootstrap.php");
?>
</head>
<body style="background-color:slategray;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>     
     <div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php"><b style="font-size:20px;">Home</b></a></li>
      <li><a href="CourseAndEligibility.php"><b style="font-size:20px;">Course& Eligibility</b></a></li>
	<li><a href="Enquery.php"><b style="font-size:20px;">Enquery</b></a></li>
   <li class="active"><a href="contact.php"><b style="font-size:20px;">Contact</b></a></li>
	<li><a href="AboutUs.php"><b style="font-size:20px;">About US</b></a></li>
    </ul>
  </div>
</nav> <br/>
<div class="container col-sm-6 ">
<center><h1 style="color:white;">Contact US</h1>
<hr>
<p>We'd <span class="glyphicon glyphicon-heart"></span> to Help!</p>
</center>
<form method="post" action="contact.php">
<input type="text" name="name" class="form-control" placeholder="Full Name..."required><br/>
<input type="email" name="email" class="form-control" placeholder="Email..."required><br/>
<input type="tel" name="mobile" class="form-control" placeholder="+91 **********..."required><br/>
<textarea cols="8" rows="8" name="message" class="form-control" placeholder="Message"required></textarea><br/>
<input type="submit" name="submit1" class="btn btn-primary col-sm-12" value="Submit"><br/>
</form>
</div>
<br/><br/><br/><br/><br/><br/>
<div class="container col-sm-6 " style="padding-left:200px">
<center>
<img src="Images\phone.png" width="50px" height="50px"><br/>
<h3>Call Us</h3>
<p>8604939407,7518707592</p>
<img src="Images\time.png" width="50px" height="50px"><br/>
<p>Time:9:30am to 5:00pm</p>
<img src="Images\address2.png" width="50px" height="50px" class="img-circle"><br/>
<p>Address:Lucknow,Gomti Nagar Lucknow</p>
</center>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("footer.php");
?>
</body>
</html>
<?php
if(isset($_POST['submit1']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['mobile'];
$message=$_POST['message'];
// First Name validation

if(empty($name))
{
echo "<script>alert(' Name required')</script>";	
echo "<script>window.location='contact.php'</script>";
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
		echo "<script>alert('Only Letter are Required') </script>";
	echo "<script>window.location='contact.php'</script>";
return false;
}
}
if (strlen($name) < 3)
{
   echo "<script>alert('Name Input is too short, minimum is 3 characters (12 max).')</script>";
echo "<script>window.location='contact.php'</script>";
return false;
   }
elseif(strlen($name) > 12)
{
   echo "<script>alert('Name is too long, maximum is 12 characters.')</script>";
echo "<script>window.location='contact.php'</script>";
return false;
   }
//emmail validation
   if(empty($email))
{
echo "<script>alert(' Email required')</script>";
echo "<script>window.location='contact.php'</script>";
return false;
}
//message validation
if(empty($message))
{
echo "<script>alert(' Message required')</script>";
echo "<script>window.location='contact.php'</script>";
return false;
}
//Contact Number Validation
	if(empty($contact))
	{
		echo "<script>alert('Number Required')</script>";
	echo "<script>window.location='contact.php'</script>";
return false;
	}else{
	
	if(strlen($contact)< 10)
	{
		echo "<script>alert('phone number should be minimum 10 digit')</script>";
echo "<script>window.location='contact.php'</script>";
return false;}
	else
	{
		if (filter_var($contact, FILTER_VALIDATE_INT))
			{
		    echo"<script>alert('Only Integer value is Required')</script>";
			echo "<script>window.location='contact.php'</script>";
return false;
			}
			
	}
	}
	//databse connectivity
$con=mysqli_connect("localhost","root","","iceproject");
$ins=mysqli_query($con,"INSERT INTO `contact`(`Name`, `Email`, `Contact`, `Message`) VALUES ('$name','$email','$contact','$message')");
if($ins==true)
{
	echo "<script>alert('Successfully! We will Contact You Soon')</script>";
}
else
{
	echo "<script>alert('Some Problem Please Try again!!')</script>";
}
}
?>

