<html>
<head>
<style>
body {
   background-image: url("back1.png");
   
}
</style>
<title>Fees</title>
<?php
include("bootstrap.php");

?>
</head>
<body>
<div class="container-fule" >
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="#" class="navbar-brand">Home -:</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="Fees.php"><b style="font-size:20px;">Course Fees </b></a></li>

</ul>
</nav>
<div class="container">
<?Php

if(isset($_POST['submit1']))
{
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iceproject");

	$course=$_POST['course'];
	switch($course)
	{
	case "Formal Course":
	$res=mysqli_query($con,"SELECT * FROM `formalcourse`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<h1>Formal Course Fees</h1>";
	echo "<tr>";
	echo "<th>";echo "ID"; echo"</th>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Fee"; echo"</th>";
	echo "<th>"; echo "Security"; echo"</th>";
	echo "<th>"; echo "Total"; echo"</th>";
	echo "<th>"; echo "Duration"; echo"</th>";
	
	echo "</tr>";
while($row=mysqli_fetch_array($res))
{
	$total=$row['Fee']+$row['Security'];
	echo "<tr>";
	echo "<td>"; echo $row["ID"]; echo"</td> ";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Fee"]; echo"</td>";
	echo "<td>"; echo $row["Security"]; echo"</td>";
	echo "<td>"; echo $total; echo"</td>";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
	}
	
		
	echo "<table>";
	echo "<tr><td><form method='post' action='UpdateFormal.php'>";
	echo "<input type='submit' name='submit' value='Update Fees' class='btn btn-primary'>";
	echo "</form></td></tr>";
	echo "</table>";
	
	echo "</table>";
	
	echo"</div>";
break;
	case "Non-Formal Course":
	
		$res=mysqli_query($con,"SELECT * FROM `nonformalcourse`");
	
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<h1>Non-Formal Course Fees</h1>";
	echo "<tr>";
	echo "<th>";echo "ID"; echo"</th>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Fee"; echo"</th>";
	echo "<th>"; echo "Security"; echo"</th>";
	echo "<th>"; echo "Total"; echo"</th>";
	echo "<th>"; echo "Duration"; echo"</th>";
	
	echo "</tr>";
while($row=mysqli_fetch_array($res))
{
	$total=$row['Fee']+$row['Security'];
	echo "<tr>";
	echo "<td>"; echo $row["ID"]; echo"</td> ";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Fee"]; echo"</td>";
	echo "<td>"; echo $row["Security"]; echo"</td>";
	echo "<td>"; echo $total; echo"</td>";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
}	
	
	echo "<table>";
	echo "<tr>";
	echo "<td><form method='post' action='UpdateNonFormal.php'></td>";
	echo "<td><input type='submit' value='Update' class='btn btn-primary'></td>";
	echo "</tr>";
	echo "</table>";
	echo"</div>";

		break;
	
	case "Short Term Course":
	$res=mysqli_query($con,"SELECT * FROM `shorttermcourse`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<h1>Short Term Course Fees</h1>";
	echo "<tr>";
	echo "<th>";echo "ID"; echo"</th>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Fee"; echo"</th>";
	echo "<th>"; echo "Security"; echo"</th>";
	echo "<th>"; echo "Total"; echo"</th>";
	echo "<th>"; echo "Duration"; echo"</th>";
	
	echo "</tr>";
while($row=mysqli_fetch_array($res))
{
	
	echo "<tr>";
	$total=$row['Fees']+$row['Security'];
	echo "<td>"; echo $row["ID"]; echo"</td> ";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Fees"]; echo"</td>";
	echo "<td>"; echo $row["Security"]; echo"</td>";
	echo "<td>"; echo $total; echo"</td>";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
}	
echo "<table>";
	echo "<tr>";
	echo "<td><form method='post' action='UpdateShortTerm.php'></td>";
	echo "<td><input type='submit' value='Update' class='btn btn-primary'></td>";
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	break;
	default:
	echo "<script>alert('Your Key word is wrong Please Enter Valid Keyword')</script>";
	}
	echo "</table>";
echo"</div>";

}	
?>
</div>