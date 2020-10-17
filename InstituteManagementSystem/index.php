<html>
<head>
<style>
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}
.section1{
	background-color:transparent;
	color:green;
	font-size:30px;
	
}
</style>
<title>ICE Homes</title>
<?php
include("bootstrap.php");
?>


</head>
<div class="container-fuel" style="background-image:url('back5.jpg');height:600px; background-attachment: fixed;background-repeat:no-repeat;">
<!--navbar-->
<nav class="navbar navbar-inverse">
     <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>     
     <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right">
     <li class="active"><a href="index.php"><b style="font-size:20px;">Home</b></a></li>
      <li><a href="CourseAndEligibility.php"><b style="font-size:20px;">Course& Eligibility</b></a></li>
	<li><a href="Enquery.php"><b style="font-size:20px;">Enquery</b></a></li>
  	<li><a href="contact.php"><b style="font-size:20px;">Contact Us</b></a></li>
	<li><a href="AboutUs.php"><b style="font-size:20px;">About Us</b></a></li>
    </ul>
  </div>
</nav>
<section>
<center style="padding-top:300px; color:#fff">
<h1>ICE</h1>
<a href="Enquery.php" class="btn btn-primary col-lg" style="width:250px; height:60px; font-size:30px; font-style:Bold;border-radius:25px;">Apply Now</a>
<h3 id="hello" style="color:Black">Because Learning Never Ends</h3>
</center>
</section>
</div>
<div style="background-color:black; color:black; padding:6px;"></div>
<center>
<img src="book1.png" height="50px" width="50px" id="img1" title="Course">
<h3 style="color:green">About ICE</h3>
</center>
<div class="container">
<p>ICE believes in the foundation of technology, that Computer science has brought new opportunities and challenges to traditional study style, and has changed the foundational concepts in education. Further major progress in computer science would only be feasible when education system provides sound foundations for areas of software engineering and knowledge engineering. ICE has taken up that responsibility for the development of student in the field of computer science.</p>
</div>
<hr>
<!--Card Images -->
<div class="container">
<div class="row">
<div class="column">
<div class="card">
<img src="cardimg1.jpg" style="width:100%" id="card1">
 <div class="container">
<h3>Industrial Training</h3>
     <p>ICE Training Center offers training in both<br/> software, Hardware, Networking and Management<br/> courses with industry experienced. The best computer<br/> center in Lucknow</P>
      </div>
    </div>
</div>
<!--Jquery method with Card Images -->
<script>
$(document).ready(function(){
$("#card1").hover(function() {
  $( this ).fadeOut( 500 );
  $( this ).fadeIn( 500 );
});
$("#card2").hover(function() {
  $( this ).fadeOut( 500 );
  $( this ).fadeIn( 500 );
});
$("#card3").hover(function() {
  $( this ).fadeOut( 500 );
  $( this ).fadeIn( 500 );
});
});
</script>
  <div class="column">
<div class="card">
<img src="Images\i4.jpg" style="width:100%" id="card2">
 <div class="container">
<h3>Corporate Training</h3>
<p>ICE offers a number of customized Corporate training<br/> programs for small, medium as well as large<br/> organizations in Lucknow and	<br/> across India.</p>
     </div>
    </div>
  </div>
  <div class="column">
<div class="card">
<img src="Images\i6.jpg" style="width:100%"id="card3">
 <div class="container">
<h3>Placement Assistance</h3>
<p>ICE Lucknow work with best companies across India <br/>to place our trained students. The list includes top<br/> MNC companies <br/>in Lucknow.</p>
     </div>
    </div>
  </div>
  </div>
</div>
<br/><br/>
<hr>
<section class="section1">
<p>
<div class="container">
We work hard to build Your Career that helps you in achieving your Dreams, but our support team works even harder to help you. </p>
</div>
<div class="container-fuel" style="background-image:url('ImgHome2.jpg');height:600px; background-attachment: fixed;background-repeat:no-repeat;">
<div style="float:right;padding-right:100px;">
<br/>
<img src="ImgHome.jpg" width="500px" height="500px" class="img-circle"style="border:5px solid black;">
</div>
</section>
</div>
<br/><br/>

<?php
include("footer.php");
?>


</body>
</html>