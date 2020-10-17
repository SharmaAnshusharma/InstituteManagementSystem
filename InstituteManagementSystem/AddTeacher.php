<?php

include("TeacherFormValidation.php");
?>
<html>
<head>
<style>

</style>
<title>Add New Teacher Form</title>
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
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a href="AdminHome.php" class="navbar-brand">Home -:</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="AddTeacherform.php"><b style="font-size:20px">Add Teacher</b> </a></li>
</ul>
</nav>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Add Teacher Form</h1></center></div>
<div class="panel-body">
<form method="post">


<div class="form-group">
<lable for="Date"><b>Date</b></lable>
<input type="date" name="date"class="form-control"/><br/>
</div>
<div class="form-group ">
<lable for="FirstName"><b>First Name:</b></lable>
<input type="text" name="fname" placeholder="First Name..."class="form-control input-sm"required/><br/>

<div class="form-group ">
<lable for="LastName"><b>Last Name:</b></lable>
<input type="text" name="lname" placeholder="Last Name..."class="form-control input-sm"/required><br/>
</div>
</div>
<div class="form-group">
<lable for="Gender"><b>Gender</b></lable>
<input type="radio" name="gender" value="Male"/required>Male
<input type="radio" name="gender" value="Female"/required>Female<br/>
</div>

<div class="form-group">
<lable for="E-mail"><b>E-mail:</b></lable>
<input type="email" name="email" placeholder="Email..."class="form-control"/required><br/>
</div>

<div class="form-group">
<lable for="contact"><b>Contact:</b></lable>
<input type="text" name="contact" placeholder="+91 **********"class="form-control"required><br/>
</div>
<div class="form-group">
<lable for="Address"><b>Address:</b></lable>
<input type="text" name="address" placeholder="Address..." class="form-control"required/>
</div>
<i><b>Qualification-:</b></i>
<div class="table-responsive">
<table class="table">
<tr><th>Name</th><th>Stream</th><th>Univerity/Board</th><th>Year</th><th>Percentage</th></tr>
<tr><th>Master</th>
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
</select>
</td>
<td><input type="text" name="percentage1" class="form-control"required></td>
</tr>
<tr><th>Bachelor</th>
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
</select></td><td><input type="text" name="percentage2" class="form-control"required></td>
</tr>
</table>
</tr>
<div class="form-group">
<lable for="Specilization"><b>Specilization:</b></lable>
<select name="specilization" class="form-control"required>
<option >Select Specilization</option>
<option value="Programming Language">Programming Language</option>
<option value="Hardware">Hardware</option>
<option value="Networking">Networking</option>
</select>
</form>
</div>

<div class="form-group ">
<lable for="Salary"><b>Salary</b></lable>
<input type="text" name="salary" Placeholder="Salary..." class="form-control"required>
</div>
<input type="submit" name="reset" value="Reset" class="btn btn-warning  col-sm-6"/>
<input type="submit" name="submit1" value="Submit" onclick="Validation()" class="btn btn-primary col-sm-6"/>
</form>
</div>
</div>
</div>

<br/><br/>
</div>

</body>
</html>
