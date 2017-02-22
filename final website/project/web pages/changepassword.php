<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include('function.php');
include('session.php');
if($_REQUEST["Submit"]=="Update")
{
$query="update datatable set password ='$_REQUEST[newpassword]' where email='$_SESSION[email]'";
$con->query($query);
if($con->errno)
	die("Sorry could not execute query".$con->error);
	else
	{
header("Location:changesuccess.php");
	}
}
?>
</body>
</html>