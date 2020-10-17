
<html>
<head>
<style>
</style>
<title>Student Details</title>
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

<nav class="nav navbar-inverse">
<div class="navbar-header"><a href="#" class="navbar-brand">Home-:</a></div>
<ul class="nav navbar-nav">

<li><a href="StudentSearchByCourse.php">Search By Course</a></li>
<li><a href="searchStudentByRoll.php">Search By Roll Number</a></li>
</ul>
</nav><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1><center><h1>Search Student</h1></center></h1></div>
<div class="panel panel-body">
<form method="post" action="AccessStudentDetails.php">

</br></br>
<b><i>Select One:</i></b>
<select class="form-control" name="student">
<option value="UG Student">UG Student</option>
<option value="Short Student"> Short Student</option>
</select>
<br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>

<br/><br/>
</body>
</html>
