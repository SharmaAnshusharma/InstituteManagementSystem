<html>
<head>
<style>
</style>
<title>Print Student Details </title>
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
<ul class="nav navbar-nav navbar-right">
<li><a href="AddCourse.php"><b style="font-size:20px;">Add Formal Course</b></a></li>
<li  class="active"><a href="AddNonFormalCourse.php"><b style="font-size:20px;">Add  Non Formal Course</b></a></li>
<li><a href="AddShortTermCourse.php"><b style="font-size:20px;">Add Short Term Course</b></a></li>
</ul>
</div>
</nav>
<br/>

<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><center><h1>Add Formal Course</h1></center></div>
<div class="panel panel-body">
<form method="post" action="AddCourse.php">
<b>Course Name</b>
<div class="form-group">
<input type="text" name="name" Placeholder="Course name..." class="form-control"/>
</div>
<b>Fees</b>
<div class="form-group">
<input type="text" name="fees" Placeholder="Course Fees..." class="form-control"/>
</div>
<b>Security</b>
<div class="form-group">
<input type="text" name="security" Placeholder="Course Security Fees..." class="form-control"/>
</div>
<b>Duration</b>
<div class="form-group">
<input type="text" name="duration" Placeholder="Course Duration..." class="form-control"/>
</div><br/>
<input type="submit" name="reset" value="Reset" class="btn btn-danger" >
<input type="submit" name="submit1" value="Submit" class="btn btn-primary" >

</div>
</div>
</div>
</form>
</body>
</html>