<?php

if(isset($_POST['submit1']))
{
  $date=$_POST["date"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $gender=$_POST["gender"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
 $salary=$_POST["salary"];
 $address=$_POST["address"];
 $stream1=$_POST["stream1"];
 $uni1=$_POST["Uni1"];
 $year1=$_POST["year1"];
 $percentage1=$_POST["percentage1"];
 $stream2=$_POST["stream2"];
 $uni2=$_POST["Uni2"];
 $year2=$_POST["year2"];
 $percentage2=$_POST["percentage2"];
 $specilization=$_POST["specilization"];
 //password generation
$random_character= str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
$password=substr($random_character,0,6);


//date Validation
if(empty($date))
{
	echo "<script>alert('Date Required')</script>";
}

// First Name validation

if(empty($fname))
{
echo "<script>alert('First Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$fname))
	{
		echo "<script>alert('Only Letter are Required') </script>";
	return false;
	}
}
if (strlen($fname) < 3)
{
   echo "<script>alert('First Name Input is too short, minimum is 3 characters (12 max).')</script>";
}
elseif(strlen($fname) > 12)
{
   echo "<script>alert('First Name is too long, maximum is 12 characters.')</script>";
}
//Last Name Validation
if(empty($lname))
{
echo "<script>alert('Last Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$lname))
	{
		echo "<script>alert('Only Letter in the last name are Required') </script>";
	return false;
	}
}
if (strlen($lname) < 3)
{
   echo "<script>alert('Last Name Input is too short, minimum is 3 characters (12 max).')</script>";
}
elseif(strlen($lname) > 12)
{
   echo "<script>alert('Last Name is too long, maximum is 12 characters.')</script>";
}
//gender 
if(empty($gender))
{
	echo "<script>alert('Gender Required')</script>";
	return false;
}


//Contact Number Validation
	if(empty($contact))
	{
		echo "<script>alert('Number Required')</script>";
	return false;
	}else{
	
	if(strlen($contact)< 10)
	{
		echo "<script>alert('phone number should be minimum 10 digit')</script>";
	return false;
	}
	else
	{
		if (filter_var($contact, FILTER_VALIDATE_INT))
			{
		    echo"<script>alert('Only Integer value is Required')</script>";
			return false;
			}
			
	}
	}

if(empty($address))
{
	echo "<script>alert('Address  Required')</script>";
}
// Course Stream Validation
if(empty($stream1))
{
echo "<script>alert('Master Coursse Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$stream1))
	{
		echo "<script>alert('Only Letter in the Master Course name are Required') </script>";
	return false;
	}
}
if (strlen($stream1) < 3)
{
echo "<script>alert('Master Course Name is too short, minimum is 3 characters (12 max).')</script>";
return false;
}
elseif(strlen($stream1) > 12)
{
   echo "<script>alert('Master Course Name is too long, maximum is 12 characters.')</script>";
return false;
}
if(empty($stream2))
{
echo "<script>alert('Bachelor Coursse Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$stream2))
	{
		echo "<script>alert('Only Letter in the Bachelor Course name are Required') </script>";
	return false;
	}
}
if (strlen($stream2) < 3)
{
   echo "<script>alert('Bachelor Course Name is too short, minimum is 3 characters (12 max).')</script>";
return false;
}
elseif(strlen($stream2) > 12)
{
   echo "<script>alert('Bachelor Course Name is too long, maximum is 12 characters.')</script>";
return false;
}

//University Validation

if(empty($uni1))
{
echo "<script>alert('Master University Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$uni1))
	{
		echo "<script>alert('Only Letter in the Master University name are Required') </script>";
	return false;
	}
}
if (strlen($uni1) < 3)
{
   echo "<script>alert('Master University Name is too short, minimum is 3 characters (12 max).')</script>";
return false;
}
elseif(strlen($uni1) > 12)
{
   echo "<script>alert('Master University Name is too long, maximum is 12 characters.')</script>";
return false;
}
if(empty($uni2))
{
echo "<script>alert('Bachelor University Name required')</script>";	
return false;
}
else
{
	if(!preg_match("/^[a-zA-Z ]*$/",$uni2))
	{
		echo "<script>alert('Only Letter in the Bachelor University name are Required') </script>";
	return false;
	}
}
if (strlen($uni2) < 3)
{
   echo "<script>alert('Bachelor University Name is too short, minimum is 3 characters (12 max).')</script>";
return false;
}
elseif(strlen($uni2) > 12)
{
   echo "<script>alert('Bachelor University Name is too long, maximum is 12 characters.')</script>";
return false;
}
if(empty($percentage1))
{
	echo "<script>alert('Master Course Percentage is Required')</script>";
return false;
	}
if(empty($percentage2))
{
	echo "<script>alert('Bachelor Course Percentage is Required')</script>";
return false;
	}
else
{
	if(!preg_match("/^[0-9]*$/",$percentage2))
	{
		echo "<script>Only Numeric Values are allowed')</script>";
		return false;
	}
}
if(empty($percentage1))
{
	echo "<script>alert('Master Course Percentage is Required')</script>";
	return false;
}

else
{
	if(!preg_match("/^[0-9]*$/",$percentage1))
	{
		echo "<script>alert('Only Numeric Values are allowed in Master Percentage')</script>";
		return false;
	}
}
if(empty($percentage2))
{
	echo "<script>alert('Bachelor Course Percentage is Required')</script>";
	return false;
}
else
{
	if(!preg_match("/^[0-9]*$/",$percentage2))
	{
		echo "<script>alert('Only Numeric Values are allowed in Bachelor Percentage')</script>";
		return false;
	}
}
if(empty($salary))
{
	echo "<script>alert(' Salary Required')</script>";
	return false;
}
else
{
	if(!preg_match("/^[0-9]*$/",$salary))
	{
		echo "<script>alert('Only Numeric Values are allowed in Salary ')</script>";
		return false;
	}
} 

	

Session_start();
 $_SESSION['date']=$date;
 $_SESSION['fname']=$fname;
 $_SESSION['lname']=$lname;
 $_SESSION['gender']=$gender;
 $_SESSION['contact']=$contact;
 $_SESSION['email']=$email; 
 $_SESSION['address']=$address;
 $_SESSION['salary']=$salary;
 $_SESSION['stream1']=$stream1;
 $_SESSION['Uni1']=$uni1;
 $_SESSION['year1']=$year1;
 $_SESSION['percentage1']=$percentage1;
 $_SESSION['stream2']=$stream2;
 $_SESSION['Uni2']=$uni2;
 $_SESSION['year2']=$year2;
 $_SESSION['percentage2']=$percentage2;
 $_SESSION["password"]=$password;
 echo "<script>window.location='checkTeacherForm.php'</script>";
}
?>
