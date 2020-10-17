<html>
<head>
<style>

</style>
<title>Course And Eligibility</title>
<?php
include("bootstrap.php");
?></head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>     
     <div class="collapse navbar-collapse" id="myNavbar">
 	 <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php"><b style="font-size:20px;">Home</b></a></li>
      <li class="active"><a href="CourseAndEligibility.php"><b style="font-size:20px;">Course& Eligibility</b></a></li>
	<li><a href="Enquery.php"><b style="font-size:20px;">Enquery</b></a></li>
  <li><a href="contact.php"><b style="font-size:20px;">Contact Us</b></a></li>
	<li><a href="AboutUs.php"><b style="font-size:20px;">About Us</b></a></li>
    </ul>
  </div>
</nav>
<br><br>
<div class="container">
<div class="panel panel-default" style="background-color:aliceblue;">
  <div class="panel-heading"><center><h1>Course And Eligibility</h1></center></div>
  <div class="panel-body">
  <div>
    <p>
	<h1><mark>BCA</mark></h1>
	The BCA is a type of Graduation level Course Stands for Bachelor In Computer Application.
	This Course is for the students who wants to be graduate in computer Stream.
	Our Insititute is affiliated with the Integral University for providing the Bachelor Degree Course.
	<h3><mark>Eligibility</mark></h3>
	The Basic Eligibility for BCA Course is Following-:
	1-10+2<br/>
	2-And With Any Stream Like (Computer, Mathematics, Biology,Commerce etc.)
	<h3><mark>Year</mark></h3>
	This Course is for Three Year.
	<h3><mark>Fees</mark></h3>

	<?php
	//code for fething the formal course fees
	$con=mysqli_connect("localhost","root","","iceproject");
	$res=mysqli_query($con,"SELECT * FROM `formalcourse`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<h1>Formal Course Fees</h1>";
	echo "<hr>";
	echo "<tr>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Duration"; echo"</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
?>	


	The Fees Updated According the University.
    </p>
  </div><hr>
  <h1>Non Formal Course</h1>
  <p>These are the basic type of Non-formal course.
  
	<?php
	//code for fething the nonformal course fees
	$con=mysqli_connect("localhost","root","","iceproject");
	$res=mysqli_query($con,"SELECT * FROM `nonformalcourse`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	
	echo "<hr>";
	echo "<tr>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Duration"; echo"</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
?>	<p>The Fees Updated According the Institute.</p><br/>
  <h1><u><b><i><mark>Short Term Course</mark></i></b></u></h1>
  <div>
    <p>
	There Are so many Short Term Course Are Available in Our institute.
    <h3><mark>Eligibility</mark></h3>
	1- 10+2.
<?php
	//code for fething the short Term course fees
	$con=mysqli_connect("localhost","root","","iceproject");
	$res=mysqli_query($con,"SELECT * FROM `shorttermcourse`");
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<h1>Short Term Course Fees</h1>";
	echo "<hr>";
	echo "<tr>";
	echo "<th>"; echo "Name"; echo"</th>"; 
	echo "<th>"; echo "Duration"; echo"</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Name"]; echo"</td> ";
	echo "<td>"; echo $row["Duration"]; echo"</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
?>	<p>The Fees Updated According the Institute.</p><br/>
	</p>
  </div>
</div>
</div>
 </div>
  
  
  <br/><br/>
<?php
include("footer.php");
?> 
 </body>

 </html>
