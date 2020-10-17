<html>
<head>
<style>
.box{
	width:100%;
	margin:20px;
	border:5px solid gray;
	height:100px;
	text-align:center;
}
</style>
<title></title>
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

<div class="container">

<?php
session_start();

?>

<div class="box">
<h1>Institute Of Computer Education</h1>
</div>
<?php
	echo "<div class='container'>";
	echo "<div class='table-responsive'>";
	echo "<table class='table'>";
	echo "<tr><th>Name:</th>";echo "<td>" .$_SESSION['name']."</td></tr>";
	echo "<tr><th>Email:</th>";echo "<td>" .$_SESSION['email']."</td></tr>";
	echo "<tr><th>Contact:</th>";echo "<td>" .$_SESSION['contact']."</td></tr>";
	echo "<tr><th>Date:</th>";echo "<td>" .$_SESSION['date']."</td></tr>";
	echo "<tr><th>Message:</th>";echo "<td>" .$_SESSION['message']."</td></tr>";

	echo "</table>";
	echo "</div>";
	echo "</div>";
?>
<div class="container"><p><mark>Thanks for submitting the Enquery.We will Make Sure that Our Executive Will contact You Soon.</mark> </p>  
<form method="post">
<button type="submit" value="Print" name="print" onclick="PrintFunction()" class="btn btn-success">
<span class="glyphicon glyphicon-print"></span>Print</button> 
</form>
<script>
function PrintFunction() {
    window.print();
}
</script>
</div>
<ul class="pager">
  <li><a href="index.php">Previous</a></li>
 </ul> 
</body>
</html>	
	