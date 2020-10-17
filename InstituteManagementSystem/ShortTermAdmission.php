<?php
include("ShortTermAdmissionValidation.php");
?>


<html>
<head>
<style>

</style>
<title>Short Term Admission Form</title>
<?php
include("bootstrap.php");
?>
</head>
<body>
<div class="container-fule" >
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="TeacherHome.php" class="navbar-brand">Home -:</a>
</div>

<ul class="nav navbar-nav">
<li class="active"><a href="ShortTermAdmission.php"><b style="font-size:20px">Short Term Admission form </b></a></li>

</ul>

</nav>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Short Term Admission Form</h1></center></div>
<div class="panel-body">
<form method="post" name="Form" >
<div class="form-group">
<lable for="Date"><b>Date:</b></lable>
<input type="date" name="date"class="form-control" required><br/>
</div>
<div class="form-group">
<lable for="Course"><b>Course:</b></lable>
<select name="course" class="form-control" required>
<option value="" >Select Any Course</option>
<option value="A Level">A Level</option>
<option value="O Level">O Level</option>
<option value="PHP with MYSQL">PHP with MYSQL</option>
<option value="Asp.NET C#">Asp.NET C#</option>
<option value="Web Designing">Web Designing (HTML, CSS, JS)</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="Java (Core)">Java</option>
<option value="Python">Python</option>
<option value="Hardware">Hardware</option>
<option value="Networking">Networking</option>

</select>
</div>


<div class="form-group">
<lable for="Date"><b>Date:</b></lable>
<input type="date" name="date"class="form-control"required><br/>
</div>

<div class="form-group col-sm-6">
<lable for="FirstName"><b>First Name:</b></lable>
<input type="text" name="fname" placeholder="First Name..."class="form-control input-sm"required/><br/>
</div>
<div class="form-group col-sm-6">
<lable for="LastName"><b>Last Name:</b></lable>
<input type="text" name="lname" placeholder="Last Name..."class="form-control input-sm"required/><br/>
</div> 
<div class="form-group">
<lable for="DOB"><b>DOB:</b></lable>
<input type="date" name="dob"class="form-control"required/><br/>
</div>
<div class="form-group">
<lable for="Gender"><b>Gender</b></lable>
<input type="radio" name="gender" value="Male"required>Male
<input type="radio" name="gender" value="Female"required/>Female<br/>
</div>
<div class="form-group">
<lable for="E-mail"><b>E-mail:</b></lable>
<input type="email" name="email" placeholder="Email..."class="form-control"/><br/>
</div>
<div class="form-group">
<lable for="contact"><b>Contact:</b></lable>
<input type="text" name="contact" placeholder="+91 **********"class="form-control"required/><br/>
</div>
<div class="form-group">
<lable for="Address"><b>Address:</b></lable>
<input type="text" name="address" placeholder="Address..." class="form-control"required/>
</div>
<div class="form-group">
<lable for="Father Name"><b>Father Name:</b></lable>
<input type="text" name="Fathername" placeholder="Father Name..."class="form-control input-sm"required/><br/>
</div> 
<div class="form-group">
<lable for="Fathercontact"><b>Father Contact:</b></lable>
<input type="tel" name="fcontact" placeholder="+91 **********"class="form-control"required/><br/>
</div>
<hr>
<i><b>Qualification-:</b></i>
<div class="table-responsive">
<table class="table">
<tr><th>Name</th><th>Stream</th><th>Univerity/Board</th><th>Year</th><th>Percentage</th></tr>
<tr><th>Intermediate</th>
<td><input type="text" name="stream1" class="form-control"required></td>
<td><input type="text" name="Uni1" class="form-control"required></td>
<td><select name="year1" class="form-control"required>
<option >*****Select Year*****</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select></td>
<td><input type="text" name="percentage1" class="form-control"required></td>
</tr>
<tr><th>High School</th>
<td><input type="text" name="stream2" class="form-control"required></td>
<td><input type="text" name="Uni2" class="form-control"required></td>
<td><select name="year2" class="form-control"required>
<option >*****Select Year*****</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select></td>
<td><input type="text" name="percentage2" class="form-control"required></td>
</tr>
</table>
</tr>
<hr>
<i><b>Fees Submission</b></i><div class="form-group">

<input type="text" name="Fees" Placeholder="Fees..." class="form-control"required>
</div>

</form>

<input type="submit" name="reset" value="Reset" class="btn btn-danger col-sm-6"/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary  col-sm-6"/>
</form>
</div>
</div>
</div>
</div>
<br/><br/>
</div>
</body>
</html>
<?php

?>