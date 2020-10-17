<html>
<head>
<style>
</style>
<title>View BCA Result </title>
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

<center>
<h1>Institute Of Computer Education</h1>
<p>Address-:Lucknow, UP.</p>
<hr>
<h3>Statement of Marks</h3>
<h3>Bachelor Of Computer Application</h3>
<h3>First Semester</h3>
<?php
session_start();
$Roll=$_SESSION['roll'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$res=mysqli_query($con,"SELECT * FROM `bcasem1` WHERE `Roll` ='$Roll'");
echo "<table class='table'>";
while($row=mysqli_fetch_array($res))
{
echo "<tr><th>Roll:</th><td>"; echo $row["Roll"]; echo "</td></tr>";
echo "<tr><th>Name:</th><td>"; echo $row["Name"]; echo "</td></tr>";
echo "<tr><th>"; echo "Subject"; echo "</th>";echo "<th>"; echo "OutOf"; echo "</th>";echo "<th>"; echo "Marks"; echo "</th></tr>";
echo "<tr><td>"; echo $row["Sub1"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks1"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub2"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks2"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub3"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks3"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub4"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks4"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub5"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks5"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub6"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks6"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub7"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks7"]; echo "</td></tr>";
echo "<tr><td>"; echo $row["Sub8"]; echo "</td>";echo "<td>"; echo "100"; echo "</td>";echo "<td>"; echo $row["Marks8"]; echo "</td></tr>";
}
echo "</table>";
?>
<center>
</div>
<ul class="pager">
<li> <a href="ViewResult.php">Previous</a></li>
</ul>
</body>
</html>