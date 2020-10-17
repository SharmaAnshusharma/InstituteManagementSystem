<?php
if(isset($_POST['submit1']))
{
	$course=$_POST["course"];
	switch($course)
	{
		case "BCA":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";

	}
	break;
	case "A Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "O Level":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "PHP with MYSQL":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Asp.NET C#":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Web Designing":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "C":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "C++":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Java":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Python":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Hardware":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	}
	break;
	
	case "Networking":
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"iceproject");
	$res=mysqli_query($link,"SELECT * FROM `classschedule` WHERE `Course` = '$course' ");
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr>";
	echo "<th>"; echo "Course"; echo "</th>";
	echo "<th>"; echo "Subject"; echo "</th>";
	echo "<th>"; echo "Teacher"; echo "</th>";
	echo "<th>"; echo "Time"; echo "</th>";
	echo "<th>"; echo "Days"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>"; echo $row["Course"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Teacher"]; echo "</td>";
	echo "<td>"; echo $row["Time"]; echo "</td>";
	echo "<td>"; echo $row["Days"]; echo "</td>";
	echo "</tr>";
	
	}
	break;
	default: 
	echo "Thi is default";
	echo "</div>";
	echo "</table>";

	}
}
?>
