<!DOCTYPE html>
<?php
/*
	Filename: registration_lecturer.php
	Purpose: Register interface for student
*/
include("authenticator.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registeration</title>
<style type="text/css">
body
{
  width: 800px;   
  margin: 0 auto; 
  font-family:Arial;
  text-align:justify;   
}
.select1 {color: #000;
}
.select1 {	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	text-align: left;
}
.resgistration {
	font-family: "Myriad Pro";
}
#font {		font-size:13px;	
}
</style>
</head>

<body>
<?php

include("dbase.php");

$admin_username = $_POST['username'];
$admin_name = $_POST['name'];
$admin_phone_no = $_POST['contact'];
$admin_password = $_POST['password'];
$admin_email = $_POST['email'];
$admin_category = $_POST['category'];

 
$query = "INSERT INTO admin VALUES ('','$admin_username','$admin_name','$admin_phone_no','$admin_password','$admin_email','$admin_category')";
$result = mysql_query($query, $conn) or die("Could not execute query in registration_admin.php");
if($result)
{
	//echo "<script type='text/javascript'> window.location='login.php' </script>";
	
}
?>
<p><img src="images/logo-rasmi-ump.png" width="93" height="68" alt="ump-logo" /><img src="images/headerpic.gif" width="700" height="126" alt="headerpic" /></p>
<p class="resgistration">Registration</p>
<table id="font" border="0" cellpadding="4" cellspacing="0" width="100%">
    <form method="post" action="registration_admin.php">
  
  <tr>
    <td width="35%" align="right">*<span class="select1">Username</span></td>
    <td width="65%"><input name="username" type="text" maxlength="50" size="30" id="Username" placeholder="CA11078" />      (studentID/staffID)</td>
  </tr>
  <div>
    <tr>
      <td width="35%" align="right"> *<span class="select1">Full Name </span></td>
      <td width="65%"><input name="name" type="text" maxlength="30" size="30" id="FirstName" />
      &nbsp;</td>
    </tr>
  </div>
  <tr>
    <td width="35%" align="right"><span class="select1">*Contact Number</span></td>
    <td width="65%"><input name="contact" type="text" maxlength="100" size="30" id="Phone" placeholder="017-7666765"/></td>
  </tr>
  <tr valign="top">
    <td width="35%" valign="top" align="right"><span class="select1">*Password</span></td>
    <td width="65%" valign="top"><input name="password" type="password" maxlength="50" size="30" id="Password"  /> 
      (at least 6 chars long)</td>
  </tr>
  <tr>
    <td width="35%" align="right"> <span class="select1">*</span><strong>Email</strong></td>
    <td width="65%"><p>
      <input name="email" type="text" maxlength="25" size="30" id="Email" placeholder="test@gmail.com"/>
    </p></td>
  </tr>
  <tr>
    <td align="right"><strong>*Category</strong></td>
    <td><input name="category" type="text" maxlength="25" size="30" id="category" placeholder="admin"/></td>
  </tr>
</table>
<p>&nbsp;</p>
<center>
  <p>
    <input type="submit" name="register" id="register" value="Register" />
    <input type="submit" name="cancel2" id="cancel2" value="Cancel" />
  </p>
  <p>&nbsp;</p>
</center>
<title></title>
</body>
    </html><p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
