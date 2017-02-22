<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
<link rel="stylesheet" href="../styling/style.css" type="text/css" />
</head>

<body>
<?php

include('session.php');?>
<div class="register" style="font-weight:600"><?php 
			echo $name.", you have Logged out successfully.";?>
             <div class="register_input"><a href="../homepage.html">Click Here</a> to go to homepage.
             </div></div><?php
session_destroy();
?>
</body>
</html>