
<html>
<head>
<style>
body {
   background-image: url("back2.jpg");
 
}

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
<ul class="nav navbar-nav">

<li ><a href="AdminSearchStudnetByCourse.php">Search By Course</a></li>
<li><a href="searchStudentByRoll.php">Search By Roll Number</a></li>
<li class="active"><a href="searchShortStudentByRoll.php">Search Short Students</a></li>
</ul>
</nav><br/><br/><br/><br/><br/><br/><br/><br/>


<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1><center><h1>Search Short Student By Roll Number</h1></center></h1></div>
<div class="panel panel-body">
<form method="post" action="searchShortStudent.php">
</br></br>
<b><i>Student Roll Number:</i></b>
<input type="text" name="roll" class="form-control"> <br/>
<input type="submit" name="submit1" value="Search" class="btn btn-primary">
</form>
</div>
</div>
</div>

</body>
</html>
