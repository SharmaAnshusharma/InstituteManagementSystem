<html>
<head>
<style>
</style>
<title>Attendence</title>
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
<div class="navbar-header">
<a href="AdminHome.php" class="navbar-brand">Home-:</a>
</div>
<div class="container-fluid">
<ul class="nav navbar-nav">
<li class="active"><a href="ViewAttendence.php">View Attendence</a></li>
</ul>
</div>
</nav>
<br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>View Attendence</h1></center></div>
<div class="panel panel-body">
<form method="post" action="StudentViewAttendence.php">

<b>Student Roll Number</b>
<div class="form-group">
<input type="text" name="roll" placeholder="Roll..." class="form-control">
</div>
<b>Course Name</b>
<div class="form-group">
<input type="text" name="course" placeholder="Course..." class="form-control">
</div>

<b>Subject Name</b>
<div class="form-group">
<input type="text" name="subject" placeholder="Subject Name..." class="form-control">
</div>

<input type="submit" name="reset" value="Reset" class="btn btn-danger">
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
