<html>
<head>
<style> 

</style>
<title>Admin Download</title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<nav class="nav navbar-inverse">
<div class="navbar-header">
<a href="TeacherHome.php" class="navbar-brand">Home -:</a></div>

<ul class="nav navbar-nav">
<li><a href="teacherUpload.php"><b style="font-size:20px;">Upload Notice</b></a></li>
<li><a href="ClassAssignment.php"><b style="font-size:20px;">Class Assignment</b></a></li>
<li><a href="UploadResult.php"><b style="font-size:20px;">Upload Result</b></a></li>
<li  class="active"><a href="NoticeFromAdminDownload.php"><b style="font-size:20px;">Download Admin</b></a></li>
<li><a href="StudentUploadAccess.php"><b style="font-size:20px;">Download Student Upload</b></a></li>
</ul>
</nav>
<br/><br/>
<div class="container">
<form method="post" action="">
<input type="submit" name="submit1" value="Click Here To Download" class="btn btn-success"/>
</form>

<?php
if(isset($_POST["submit1"]))
{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `adminupload` ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Upload Date"; echo "</th>";
	echo "<th>"; echo "File"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Date"]; echo "</td>";
	echo "<td>";
	echo "<a href='".$row['File Name']." '>";echo "Download</a>";
	echo "</td>";
	
	echo "</tr>";
	
	}
	
	echo "</table>";
	echo "</div>";
}
?>
</div>
<ul class="pager">
<li><a href="TeacherHome.php">Previous</a></li>
</ul>
</body>
</html>