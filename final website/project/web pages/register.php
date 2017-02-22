<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link rel="stylesheet" href="../styling/style.css" type="text/css" />
</head>

<body>
<?php
function validate($val){
	$val=htmlentities(trim($val));
	return $val;
}
$nameErr=$regnoErr=$yearErr=$mobErr=$emailErr=$genderErr=$passErr="";
$name=$regno=$year=$mob=$email=$gender=$pass="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
/*$name=validate($_POST['name']);
$regno=validate($_POST['regno']);
$gender=validate($_POST['gender']);
$year=validate($_POST['year']);
$mob=validate($_POST['mob']);
$email=validate($_POST['email']);
$pass=validate($_POST['pass']);*/
if(empty($_POST['name']))
{
	?><div class="register" style="font-weight:600"><?php $nameErr="Name is required";
	echo $nameErr;?></div><?php
	die();
}
else
{
	$name=validate($_POST['name']);
	 if (!preg_match("/^[a-zA-Z ]*$/",$name))
	  {
       ?><div class="register" style="font-weight:600"><?php $nameErr = "Only letters and white space are allowed in name";
	   echo  $nameErr; ?></div><?php
	   die();
     }
}
 if (empty($_POST["regno"]))
  {
	  ?><div class="register" style="font-weight:600"><?php $regnoErr="registration number required";
	  echo $regnoErr; ?></div><?php
	  die();
  }
  else
  {
	  $regno=validate($_POST["regno"]); 
	  if(!(strlen($regno)==8))
	  {
		  ?><div class="register" style="font-weight:600"><?php $regnoErr="Enter valid registration number";
		  echo $regnoErr; ?></div><?php
		  die();
	  }
  if(!preg_match("/^[0-9]*$/",$regno))
   {
    ?><div class="register" style="font-weight:600"><?php $regnoErr="Enter valid registration number";
	 echo  $regnoErr; ?></div><?php
	 die();
}
}
 if (empty($_POST["gender"]))
 {
     ?><div class="register" style="font-weight:600"><?php $genderErr = "Gender is required";
	 echo $genderErr; ?></div><?php
	 die();
 }
    else 
	{    
     $gender=validate($_POST["gender"]); 
 }
  if (empty($_POST["year"]))
  {
	   ?><div class="register" style="font-weight:600"><?php $yearErr = "year is required";
	   echo $yearErr; ?></div><?php
	   die();
  }
  else
  {
	  $year=validate($_POST['year']);
	  if(!("1st year"==$year||"2nd year"==$year||"3rd year"==$year||"4th year"==$year))
	  {
		  ?><div class="register" style="font-weight:600"><?php  $yearErr="Enter a valid B.Tech year";
		  echo  $yearErr; ?></div><?php
		  die();
	  }
  }
  if (empty($_POST["mob"]))
  {
	 ?><div class="register" style="font-weight:600"><?php $mobErr="mobile number required";
	  echo  $mobErr; ?></div><?php
	  die();
  }
  else
  {
	  $mob=validate($_POST['mob']); 
	  if(!(strlen($mob)==10))
	  {
		   ?><div class="register" style="font-weight:600"><?php $mobErr="Enter valid phone number";
		  echo $mobErr; ?></div><?php
		  die(); 
	  }
  if(!preg_match("/^[1-9][0-9]*$/",$mob))
   { 
   
    ?><div class="register" style="font-weight:600"><?php  $mobErr="Enter valid phone number";
	 echo $mobErr;  ?></div><?php
	 die();
}
}
if (empty($_POST["email"]))
{
    ?><div class="register" style="font-weight:600"><?php  $emailErr = "Email is required";
	 echo $emailErr;   ?></div><?php
	 die();
}
else
{
     $email =validate($_POST["email"]);
     if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
	 {
       ?><div class="register" style="font-weight:600"><?php $emailErr = "Invalid email format";
	   echo  $emailErr;  ?></div><?php
	   die();
     }
  }
 $pass=htmlentities(($_POST['pass'])); /*trim would remove spaces from password hence validate not used*/
 if($nameErr==""&&$regnoErr==""&&$yearErr==""&&$mobErr==""&&$emailErr==""&&$genderErr==""&&$passErr=="")
 {
	 $dbhost="localhost";
     $dbuname="root";
     $dbpassword="jatin@1996";
     $dbname="datastorage";
 }
 $con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);
if($con->connect_errno){
	die("Not able to connect to database".$con->connect_error);
}
else 
/*$query="INSERT INTO `wdc_website`.`table` (`name`, `registration number`, `gender`, `year`, `mobile`, `email`, `password`) VALUES ('$name', '$regno', '$gender', '$year', '$mob', '$email', '$pass');";*/
$query="INSERT INTO `datastorage`.`datatable` (`name`, `registration number`, `gender`, `year`, `mobile number`, `email`, `password`) VALUES ('$name', '$regno', '$gender', '$year', '$mob', '$email', '$pass');";
$con->query($query);
if($con->errno)
	die("Sorry could not execute query".$con->error);
	else
	{
	?><div class="register" style="font-weight:600"><?php 
			echo  "Congratulations!You have registered successfully.";?>
             <div class="register_input"><a href="login.html">Click Here</a> to login.</div>
             <div class="register_input"><a href="../homepage.html">Click Here</a> to go to homepage.</div>
             </div>/<?php
	}
}
?>
</body>
</html>