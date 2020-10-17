<html>
<head>
<style>
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}


</style>
<title>About Us</title>
<?php
include("bootstrap.php");
?>
</head>
<body >
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
      <li><a href="index.php"><b style="font-size:20px;">Home</b></a></li>
      <li><a href="CourseAndEligibility.php"><b style="font-size:20px;">Course& Eligibility</b></a></li>
	<li><a href="Enquery.php"><b style="font-size:20px;">Enquery</b></a></li>
	<li><a href="contact.php"><b style="font-size:20px;">Contact Us</b></a></li>
	<li  class="active"><a href="AboutUs.php"><b style="font-size:20px;">About Us</b></a></li>
    </ul>
  </div>
</nav>
<br>
<div class="container" style="font-size:20px;color:green; background-color:whitesmoke;">
<p><center><h1><mark>Institute of Computer Education.</mark></center></h1><br/>
We have a Institute that provide the education about the computer. There are so many courses are provided in our computer institute named as Institute of Computer Education.
	Institute of Computer Education, This computer institute was organized by Mr. V K Sharma in 1997 for the purpose of providing the education and knowledge about the computer to the students in very low cost.
	The courses that are provided by this institute, Institute of Computer Education, are all certified by many Known companies or organization and Universities such as CISCO, NIELIT, Integral University and Microsoft.<br/>
<b>Course-:</b> There are basically so many courses are provided or available by the Institute of Computer Education.
	The courses are categorized into the following categories. The categories are followings-:<br/>
<b>1-	Formal Course -:</b> The courses that fall under the category of formal course are following of two type-:<br/>
<?php
//Fees access from formalcourse database
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
?>		<b>Fees Details:</b> According to the University.<br/><br/>   <h1>Non Formal Course</h1>
  <p>These are the basic type of Non-formal course.
  
	<?php
//Fees access from nonformalcourse database
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
 
  
<b>3-	Short Term Courses:</b>  There are so many courses are provided in Institute of Computer Education. The short term course means the course that provide education short months or week.
The List of short Term courses are given below-:<br/>
<b>1-	Language Course -:</b>These are the basic programming course which are provided to the student or the professionals.<br/>
<?php
//Fees access from shortTermcourse database
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
These are the basic course that are provided by Institute Of Computer Education.
</p>
</div>
<br/><br/>
<?php
include("footer.php");
?>
</body>
</html>