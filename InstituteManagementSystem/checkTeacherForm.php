<html>
<head>
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
<body>
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="#" class="navbar-brand">Home -:</a>
</div>

<ul class="nav navbar-nav">
<li class="active"><a href="AddTeacher.php">Teacher form </a></li>
</ul>

</nav>

<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Upload and Check Value</h1></center></div>
<div class="panel-body">

<form method="post" enctype="multipart/form-data" >
<table class="table">
<tr><th><b>Upload Image</b></th><th><b>Upload Adhar</b></th></tr>
<tr>
<td><input type="file" name="adhar"/></td>
<td><input type="file" name="img"/></td>
</tr>
</table>




<?php
session_start();

echo "<div class='table-responsive'>";
echo "<table class='table table-striped'>";
$date=$_SESSION['date'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$gender=$_SESSION['gender'];
$contact=$_SESSION['contact'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
$stream1=$_SESSION['stream1'];
$uni1=$_SESSION['Uni1'];
$year1=$_SESSION['year1'];
$percentage1=$_SESSION['percentage2'];
$stream2=$_SESSION['stream2'];
$uni2=$_SESSION['Uni2'];
$year2=$_SESSION['year2'];
$percentage2=$_SESSION['percentage2'];
$salary=$_SESSION["salary"];
$password=$_SESSION['password'];
echo  "<tr><th>Date of Joining</th>";echo"<td>".$_SESSION['date']."</td></tr>";
echo  "<tr><th>First Name</th>";echo"<td>".$_SESSION['fname']."</td></tr>";
echo  "<tr><th>Last Name</th>";echo"<td>".$_SESSION['lname']."</td></tr>";
echo  "<tr><th>Gender</th>";echo"<td>".$_SESSION['gender']."</td></tr>";
echo  "<tr><th>Contact</th>";echo"<td>".$_SESSION['contact']."</td></tr>";
echo  "<tr><th>Email</th>";echo"<td>".$_SESSION['email']."</td></tr>";
echo  "<tr><th>Salary</th>";echo"<td>".$_SESSION['salary']."</td></tr>"; 
echo  "<tr><th>Address</th>";echo"<td>".$_SESSION['address']."</td></tr>";
echo  "<tr><th>Intermediate</th>";echo"<td>".$_SESSION['stream1']."</td></tr>";
echo  "<tr><th>University/Board</th>";echo"<td>".$_SESSION['Uni1']."</td></tr>";
echo  "<tr><th>Passing Year</th>";echo"<td>".$_SESSION['year1']."</td></tr>";
echo  "<tr><th>Percentage</th>";echo"<td>".$_SESSION['percentage1']."</td></tr>";
echo  "<tr><th>High School</th>";echo"<td>".$_SESSION['stream2']."</td></tr>";
echo  "<tr><th>University/Board</th>";echo"<td>".$_SESSION['Uni2']."</td></tr>";
echo  "<tr><th>Passing Year</th>";echo"<td>".$_SESSION['year2']."</td></tr>";
echo  "<tr><th>Percentage</th>";echo"<td>".$_SESSION['percentage2']."</td></tr>";
echo "</table>";
echo "</div>";
if(isset($_POST['submit2']))
{

//Image file Upload.
 $file_name1=$_FILES['adhar']['name'];
	$file_name2=$_FILES['img']['name'];
	$file_tmp_name1=$_FILES['adhar']['tmp_name'];
	$file_tmp_name2=$_FILES['img']['tmp_name'];
	$store1="Stu_Tea_Image/".$file_name1;
	$store2="Stu_Tea_Image/".$file_name2;
	$file_size1=$_FILES['adhar']['size'];
	$file_size2=$_FILES['img']['size'];
			if($file_size1>=1000000)
		{
			echo "<script>alert('Max size of image is 1 MB')</script>";
		}
		else
		{
			if(move_uploaded_file($file_tmp_name1,$store1))
			{
			}
			else
			{
				echo "<script>alert('Student Image Required')</script>";
			echo "<script>window.location='checkTeacherForm.php'</script>";
			return false;
			}
		}
		if($file_size2>=1000000)
		{
			echo "<script>alert('Max size of image is 1 MB')</script>";
		}
		else
		{
			if(move_uploaded_file($file_tmp_name2,$store2))
			{
				
			}
			else
			{
				echo "<script>alert('Adhar Image Required')</script>";
			echo "<script>window.location='checkTeacherForm.php'</script>";
			return false;
			}
		}




	//Database connectivity.
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
$check_email_query="select * from `teacherform` WHERE Email='$email'";  
    $run_query=mysqli_query($con,$check_email_query);  
if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
	echo "<script>window.location='AddTeacher.php'</script>";	
					  
    }
else
{
mysqli_query($con,"INSERT INTO `teacherform`(`Date`,`First Name`, `Last Name`, `Gender`, `Email`, `Contact`, `Address`, `M Stream`, `M University`, `M Year`, `M Percentage`, `B Stream`, `B University`, `B Year`, `B Percentage`, `Specilization`, `Adhar`, `Image`, `Salary`, `Password`) VALUES ('$date','$fname','$lname','$gender','$email','$contact','$address','$stream1','$uni1','$year1','$percentage1','$stream2','$uni2','$year2',$percentage2,'$specilization','$file_name1','$file_name2','$salary','$password');");

						echo "<script>alert('Inserted Successfully.')</script>";
						echo "<script>window.location='PrintTeacherDetails.php'</script>";	
					
}
}

?>

<input type="submit"  value="Back" name="reset" class="btn btn-danger"/>
<input type="submit" value="Proceed" name="submit2" class="btn btn-primary"/>
</form>
</div>
</div>
</div>

</body>
</html>