
<html>
<head>
<style>
body {
   background-image: url("back2.jpg");
 
}
</style>
<title>Search Teacher</title>
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
<div class="navbar-header"><a href="AdminHome.php" class="navbar-brand">Home -:</a></div>
<ul class="nav navbar-nav">
<li><a href="TeacherDetails.php">Search Information</a></li>
<li class="active"><a href="TeacherSearchByName.php">Search By Name</a></li>
<li><a href="TeacherSearchById.php">Search By ID</a></li>
</ul>
</nav><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="panel panel-default">
<div class="panel panel-heading"><h1><center><h1>Search Teacher By Name</h1></center></h1></div>
<div class="panel panel-body">
<form method="post" action="AccessTeacherByName.php">
</br></br>
<b><i>Teacher First Name:</i></b>
<input type="text" name="Teacher" class="form-control"> <br/><br/>
<input type="submit" name="submit1" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>

<br/><br/>
</body>
</html>
