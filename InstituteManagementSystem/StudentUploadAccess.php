<html>
<head>
<style>

</style>
<title>Student Upload Access</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<div class=" bg" style="height:500px;">
<!--Navigation Bar-->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="#" class="navbar-brand">
Home -:</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="StudentUploadAccess.php"><b style="font-size:20px">Access Student Upload</b></a></li>
</ul>
</nav>
<div class="container">
<form method="post" action="">
<input type="submit" name="submit1" value="Click Here To Download" class="btn btn-success"/>
</form>
<?php
if(isset($_POST['submit1']))
{
	
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `studentupload`");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Name"; echo "</th>";
	echo "<th>"; echo "Roll Number"; echo "</th>";
	echo "<th>"; echo "Date"; echo "</th>";
	echo "<th>"; echo "File"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Name"]; echo "</td>";
	echo "<td>"; echo $row["Roll"]; echo "</td>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>";
	echo "<a href='StudentUpload/".$row['File']." '>";echo "Download</a>";
	echo "</td>";
	
	}
	
	echo "</div>";
	echo "</table>";
	
}
	
?>
</div>
</body>
</html>
