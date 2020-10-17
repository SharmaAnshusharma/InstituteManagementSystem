<html>
<head>
<style>

</style>
<title>Student Upload</title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<div class="container-fule">
<nav class="navbar navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li class="active"><a href="HomeUploadAccess.php"><b style="font-size:20px">Download Resume </b></a></li>
</ul>
</nav>
<div class="container">

<form method="post">
<input type="submit" name="submit1" value="Access Resume" class="btn btn-success"/>

</form>
<?php
if(isset($_POST["submit1"]))
{
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");
	$res=mysqli_query($con,"SELECT * FROM `uploadresume` ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<td>";echo "Name";echo "</td>";
	echo "<td>";echo "Date";echo "</td>";
	echo "<td>";echo "File";echo "</td>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>";echo $row["Name"];echo "</td>";
	echo "<td>";echo $row["Date"];echo "</td>";
	echo "<td>";
	echo "<a href='./UploadResume/".$row['File']." '>";echo "Download</a>";
	echo "</td>";
	
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
}

?>
</div>
</body>
</html>
