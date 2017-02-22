<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login PHP</title>
<link rel="stylesheet" href="../styling/style.css" type="text/css" />
<link rel="stylesheet" href="../styling/style_homepage.css" type="text/css" />
</head>

<body>
<?php
include('function.php');
$error='';
if(empty(validate($_POST['email']))||empty(validate($_POST['pass'])))
{?><div class="register" style="font-weight:600"><?php echo "   Invalid username or password";?></div><?php }
else
{
$email=validate($_POST['email']);
$pass=validate($_POST['pass']);
$con=dbconnect();
$email=stripslashes($email);
$pass=stripslashes($pass);
$email=mysql_real_escape_string($email);
$pass=mysql_real_escape_string($pass);
$query="select name,password from datatable WHERE email LIKE '$email'";
$res=$con->query($query);
if($res->num_rows==0){
	?> <div class="register" style="font-weight:600"><?php 
	echo "Invalid username or password";?></div>
    <?php
}
else{
	while($arr=$res->fetch_array()){
		if($arr['password']==$pass){
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['name']=$arr['name'];
			header("location: profile.php");
            
            
		}
		else
		{
		?><div class="register" style="font-weight:600"><?php echo "Invalid password";?></div>
        <?php
		}
			}
}
}
?>
</body>
</html>