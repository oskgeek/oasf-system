<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
 
body
{
	width: 800px;
	margin: 0 auto;
	font-family: "Myriad Pro";
	text-align: left;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.caption {	font-size: 9px;
}
.caption {	color: #000;
}
.caption {	font-size: 9px;
}
.caption {
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif;
}
.select {	color: #000;
}
.select {	font-family: Verdana, Geneva, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: bold;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.resgistration {	font-family: "Myriad Pro";
}
.select1 {color: #000;
}
.select1 {font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	text-align: left;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<?php
include("authenticator.php");
include("dbase.php");

extract($_POST);

$query = "UPDATE SET password = '$password', name = '$name', gender = '$gender',
dob = '$dob', phoneNo = '$phoneNo', ok_to_email = '$status' WHERE customerid = '$id'";

$result = mysql_query($query, $conn) or die("Could not execute query in update.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='Main Page.php' </script>";
}
?>
<center>
<p><img src="images/logo-rasmi-ump.png" width="93" height="68" alt="logoump" /><img src="images/headerpic.gif" width="700" height="126" alt="headerpic" /></p>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="mainpage.html"><img src="images/page3-img3.png" width="54" height="48" align="middle" /><br />Home</a>
    
  
</ul>
<ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="schedule.html"><img src="images/page3-img2.png" alt="" width="54" height="48" align="center" />Schedule</a></li>
  <li><a class="MenuBarItemSubmenu" href="appointment.php"><img src="images/page3-img5.png" alt="" width="54" height="48" />Appointment</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="records.php"><img src="images/page3-img4.png" alt="" width="54" height="48" />Records</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="profile.php"><img src="images/page3-img6.png" alt="" width="54" height="48" /><br />Profile</a>
    <ul>
      <li><a href="update_profile.html">Edit Profile</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
  <li>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>
<p class="resgistration">Edit Profile</p>
<table id="font" border="0" cellpadding="4" cellspacing="0" width="100%">
<form method="post" action="insert.php">
  
    <tr>
    <td width="35%" align="right">*<span class="select1">Full Name</span></td>
    <td width="65%"><input name="name" type="text" maxlength="50" size="50" id="FirstName" placeholder="John Ratzenberger" /></td>
  </tr>
  <div>
    <tr>
      <td width="35%" align="right"> *<span class="select1">Password :</span></td>
      <td width="65%"><input name="password" type="password" maxlength="30" size="50" id="txtpassword" />
        &nbsp;
        (at least 6 chars long)
        <?php
							
						?></td>
    </tr>
  </div>
  <tr>
    <td width="35%" align="right"><span class="select1">Email:</span></td>
    <td width="65%"><input name="email" type="text" maxlength="100" size="50" id="EMail" placeholder="john@hotmail.com"/></td>
  </tr>
  <tr valign="top">
    <td width="35%" valign="top" align="right"><span class="select1">Username:</span></td>
    <td width="65%" valign="top"><input name="FirstName" type="text" maxlength="50" size="50" id="FirstName2" placeholder="John Ratzenberger" />
      (studentID/staffID)</td>
  </tr>
  <tr>
    <td width="35%" align="right"> *<span class="select1">Contact Number</span>: </td>
    <td width="65%"><input name="phoneNo" type="text" maxlength="25" size="50" id="Phone" placeholder="017-4642222"/></td>
  </tr>
</table>
<center>
  <p>
    <input type="submit" name="update" id="update" value="Update" />
    <input type="submit" name="cancel2" id="cancel2" value="Cancel" />
  </p>
</center>
<p class="resgistration">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 
</body>
</html>
