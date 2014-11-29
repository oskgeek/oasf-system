<?php
/*
 Filename: login.php
 Purpose: Login interface.
*/
 //Start Session
 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to OASF</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body
{
	width: 800px;
	margin: 0 auto;
	font-family: Arial;
	text-align: center;
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
	text-align: left;
}
.barstyle a b {
	text-align: left;
}
.barstyle a b {
	text-align: right;
}
.barstyle a b {
	text-align: center;
}
.barstyle a c {
	text-align: right;
}
.barstyle a b {
	text-align: left;
}
.barstyle a b {
	text-align: center;
}
.barstyle a b {
	text-align: right;
}
.barstyle a b {
	text-align: justify;
}
.barstyle a b {
	text-align: left;
}
reg {
	font-weight: bold;
}
#form1 p {
	font-weight: bold;
}
#form1 p {
	color: #06C;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
#form1 p a {
	font-size: 12px;
}
.barstyle a b {
	text-align: right;
}
.barstyle a b {
	text-align: left;
}
#form1 table {
	text-align: center;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
}
#form1 p {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 24px;
}
#form1 ps {
	font-family: "Myriad Pro";
}
#form1 p {
	font-size: large;
}
#form1 p {
	color: #000;
}
.register {
	font-weight: bold;
}
.register {
	text-align: center;
	color: #F00;
}
.acc {
	text-align: center;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
.admin {
	text-align: justify;
}
.login {
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	font-size: 10px;
}
.tablec {
	border: thin solid #000;
}
.tablec {
	border: 0.8px solid #000;
}
.tablec .login .register a {
	font-size: 12px;
}
.reg {
	font-size: 14px;
}
.j {
	font-weight: normal;
	color: #063;
	font-size: 12px;
}
</style>
</head>

<body>
&nbsp;
</p>
<p>&nbsp;</p>
<p><img src="images/logo-rasmi-ump.png" width="93" height="68" alt="ump-logo" /><img src="images/headerpic.gif" width="700" height="126" alt="headerpic" /></p>
<table width="510" border="0" align="center">
  <tr class="tablec">
    <td width="504" class="login"><p class="register"><span class="reg"> <span class="j">Not yet registered?</span></span></p>
      <p class="register"><span class="reg"> REGISTER </span><span class="reg">NOW</span></p>
      <p class="register"><a href="registration_student.php">Student Registration</a></p>
      <p class="register"><a href="registration_lecturer.php">Lecturer Registration</a></p>
    <p class="register"><a href="registration_admin.php" class="admin">Admin Registration</a></p></td>
  </tr>
</table>
<p>
  <?php

// to display error message if username and password id invalid
  if (isset($_SESSION['ERRMSG_ARR']))
  {
   echo "<h1 style='color:red'>Error found: ";
   for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++){
    echo $_SESSION['ERRMSG_ARR'][$i]."! ";
  }
  echo "</h1>";
  unset($_SESSION['ERRMSG_ARR']);
 }

?>
  
</p>
<center>
  <form method = "post" action = "sessionHandler.php"
		style = "font-size: 10pt">
	<table width="247" border="0">
	  <tr>
	    <td width="77"><strong>Username:</strong></td>
	    <td width="154"><input name="username" type = "text" size="30" /></td>
      </tr>
	  <tr>
	    <td><strong>Password:</strong></td>
	    <td><input name="password" type = "password" size="30" /></td>
      </tr>
	  <tr>
	    <td><strong>Category :</strong></td>
	    <td><label for="category"></label>
	      <select name="category" id="category">
	        <option>Lecturer</option>
	        <option>Student</option>
	        <option>Admin</option>
        </select></td>
      </tr>
    </table>
	<p>
	  <input type = "submit" value = "Login"
		style = "background-color:#F0E86C; color: navy;
		font-weight: bold" />
	  <input type = "reset" value = "Reset" />
	</p>
</form>
<p>&nbsp;</p>
</center>
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
