<html>
<head>
<style>

</style>
<title>Access Contact Us</title>
<?php
include("bootstrap.php");
?>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<!--Dropdown Menu-->
<li><a href="AccessEnquery.php"><b style="font-size:20px">Access Enquery</b></a></li>
<li class="active"><a href="AccessContact.php"><b style="font-size:20px">Access Contact</b></a></li>
</ul>
</nav>
<div class="container">
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"iceproject");
$res=mysqli_query($con,"SELECT * FROM `contact`");
echo "<div class='table-responsive'>";
echo "<table class='table table-striped'>";
echo "<tr>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Contact"; echo "</th>";
echo "<th>"; echo "Contact About"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Name"]; echo "</td>";
echo "<td>"; echo $row["Email"]; echo "</td>";
echo "<td>"; echo $row["Contact"]; echo "</td>";
echo "<td>"; echo $row["Message"]; echo "</td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
?>

</div>
<ul class="pager">
  <li><a href="AdminHome.php">Previous</a></li>
 </ul> 
</body>
</html>	
	