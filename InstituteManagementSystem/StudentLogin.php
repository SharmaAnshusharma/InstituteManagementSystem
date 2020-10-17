<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $db=mysqli_connect("localhost","root","","iceproject");
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['userpassword']); 
      
      $sql = "SELECT id FROM shstudentregister WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
        
       echo "<script>window.location='StudentHome.php'</script>";
      }else {
         echo "<script>alert('Your Login Name or Password is invalid')</script>";
      }
   }
?>
<html>
<head>
<style>

</style>
<title>Students Login</title>
<?php
include("bootstrap.php");
?>
</head>

<body>
<nav class="nav navbar-inverse">
<div class="navbar-header">
</div>
<ul class="nav navbar-nav">
<li><a href="loginHome.php"><b style="font-size:20px;">Login Home</b></a></li>
<li class="active"><a href="Student.php"><b style="font-size:20px;">Student Login</b></a></li>
</ul>
</nav>
<br><br><br>
<div class="container" style="padding-left:300px;">
  <form method="post">
  <div class="panel panel-default col-sm-7">
  	<h4><mark>Student Login</mark></h4>
	<div class="panel panel-body">
	<center><img src="Images/imglogin.png" width="200px" height="200px" class="img-circle" ></center>
	<hr>
	
	<input type="text" name="username" placeholder="Username" class="form-control"><br/>
	<input type="password" name="userpassword" placeholder="Password" class="form-control"><br/>
	<input type="submit" name="login"  class="btn btn-primary col-sm-12"value="Login"><br/><br/>
	</form>
	<hr>
	<form method="post" action="ChangeStudentPass.php">
	<a href="ChangeStudentPass.php">Change Password</a>
	</form>
	<br/>
	</form>
	</div>
</div>	
</div>
</body>
</html>