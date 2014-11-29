<?php
/*
	Filename: logout.php
	Purpose: To logout from the website and destroy the self identify.
*/
 //Start session
 session_start();
 
 //Unset the variables stored in session
 session_destroy();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body
{
	width: 800px;
	margin: 0 auto;
	font-family: Arial;
	text-align: right;
	font-weight: bold;
}
.caption {	font-size: 9px;
}
.caption {	color: #000;
}
.caption {	font-size: 9px;
}
.caption {
	font-size: 9px;
	font-family: Verdana, Geneva, sans-serif;
}
.select {	color: #000;
}
.select {	font-family: Verdana, Geneva, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: bold;
}
.caption1 {font-size: 9px;
}
.caption1 {color: #000;
}
.caption1 {font-size: 9px;
}
.caption1 {	font-size: 9px;
	font-family: Verdana, Geneva, sans-serif;
}
.select1 {color: #000;
}
.select1 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	text-align: left;
}
.barstyle a b {
	color: #399;
}
#login h1 {
	text-align: center;
	font-weight: bold;
}
.barstyle a b {
	text-align: center;
}
.barstyle a b {
	text-align: left;
}
.barstyle a b {
	font-weight: normal;
}
#login p {
	font-weight: normal;
}
.barstyle a b {
	font-weight: bold;
}
</style>
</head>


<p><img src="images/logo-rasmi-ump.png" width="93" height="68" alt="ump-logo" /><img src="images/headerpic.gif" width="700" height="126" alt="headerpic" /></p>

<td id="login"width="50%">
					<h1 align="center">&nbsp;</h1>
  <h1 align="center">You have been logged out.</h1>
					<p align="center">Click here to <a href="login.php">Login</a> again</p>
</td>
