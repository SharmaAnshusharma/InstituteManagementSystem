<html>
<head>
<style>
</style>
<title>Students Login</title>
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

<div class="container">
<center><h1>Institute Of Computer Education</h1></center>

<div class="container"><center><h3> Teacher Details</h3></center></div>
<?php
session_start();
$Name=$_SESSION['fname'];

?>
<?Php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$result=mysqli_query($con,"SELECT ID  FROM `teacherform` WHERE `First Name` = '$Name' ");
$row = mysqli_fetch_array($result);
$id = $row['ID'];
?>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$result=mysqli_query($con,"SELECT *  FROM `teacherform` where `ID`= '$id'");

while($row = mysqli_fetch_array($result))
{
	
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo"<tr><th>Teacher Adhar</th><td>";
	echo "<img src='Stu_Tea_Image/".$row['Adhar']." ' width='100px' height='100px' >";
	echo "</td>";
	
	echo "<th>Teacher Image</th>";
	echo "<td>";
	echo "<img src='Stu_Tea_Image/".$row['Image']." 'width='100px' height='100px'>"; 
	echo "</td></tr>";
	echo "</table>";
	echo "</div>";
}

?>

<?php
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	
	echo "<tr><th>Teacher Id:</th>";echo "<td>" .$id ."</td></tr>";
	echo "<tr><th>First Name:</th>";echo "<td>" .$_SESSION['fname']."</td></tr>";
	echo "<tr><th>Last Name:</th>";echo "<td>" .$_SESSION['lname']."</td></tr>";
	echo "<tr><th>Contact:</th>";echo "<td>" .$_SESSION['contact']."</td></tr>";
	echo "<tr><th>Salary:</th>";echo "<td>" .$_SESSION['salary']."</td></tr>";
	echo "<tr><th>Email:</th>";echo "<td>" .$_SESSION['email']."</td></tr>";
	echo "<tr><th>Password OTP :</th>";echo "<td>" .$_SESSION['password']."</td></tr>";
	echo "</table>";
	echo "</div>";
?>
<div class="container" style="text-align:right">
<b>Authority sign</b>
</div>

<form method="post">
<button type="submit" value="Print" name="print" onclick="PrintFunction()" class="btn btn-success">
<span class="glyphicon glyphicon-print"></span>Print</button> 
</form>
<script>
function PrintFunction() {
    window.print();
}
</script>
</div>
<ul class="pager">
  <li><a href="AdminHome.php">Previous</a></li>
 </ul> 
</body>
</html>	
	