<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$dbhost="localhost";
     $dbuname="root";
     $dbpassword="jatin@1996";
     $dbname="datastorage";
	 $con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);
if($con->connect_errno){
	die("Not able to ".$con->connect_error);	
}
session_start();
$email=$_SESSION['email'];
$name=$_SESSION['name'];
?>
</body>
</html>