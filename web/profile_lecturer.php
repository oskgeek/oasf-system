<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/*
	Filename: profile_lecturer.php
	Purpose: Lecturer profile interface
*/
include("authenticator.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
 
body
{
	width: 800px;
	margin: 0 auto;
	font-family: "Myriad Pro";
	text-align: center;
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
#font {
	font-weight: bold;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
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
<p>&nbsp;</p>

<?php
include("dbase.php");

$query = "SELECT * FROM lecturer";
$result = mysql_query($query, $conn);

while($row = mysql_fetch_array($result)) {
$lecturer_id = $row["lecturer_id"];
$lecturer_name =  $row["lecturer_name"];
$lecturer_password = $row ["lecturer_password"];
$lecturer_email = $row ["lecturer_email"];
$lecturer_username = $row["lecturer_username"];
$lecturer_phone_no = $row ["lecturer_phone_no"];
?>
<form method="post" action="update_lctr.php">
<table id="font" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td align="right">*ID</td>
    <td width="312"><input name="id" type="text" maxlength="50" size="10" id="id" value="<?php echo "$lecturer_id";?>" /></td>
    </tr>
    <tr>
    <td width="218" align="right">*<span class="select1">Full Name</span></td>
    <td colspan="4"><input name="name" type="text" maxlength="50" size="50" id="FirstName" value="<?php echo "$lecturer_name";?>" /></td>
  </tr>
  <div>
    <tr>
      <td width="218" align="right"> *<span class="select1">Password :</span></td>
      <td colspan="4"><input name="password" type="password" maxlength="30" size="50" id="txtpassword" value="<?php echo "lecturer_password";?>" />
      &nbsp;</td>
    </tr>
  </div>
  <tr>
    <td width="218" align="right"><span class="select1">Email:</span></td>
    <td colspan="4"><input name="email" type="text" maxlength="100" size="50" id="EMail" value="<?php echo "$lecturer_email";?>"/></td>
  </tr>
  <tr valign="top">
    <td width="218" valign="top" align="right"><span class="select1">Username:</span></td>
    <td colspan="4" valign="top"><input name="username" type="text" maxlength="50" size="50" id="FirstName2" value="<?php echo "$lecturer_username";?>" /></td>
  </tr>
  <tr>
    <td align="right">*<span class="select1">Contact Number</span>:</td>
    <td colspan="4"><input name="phoneNo" type="text" maxlength="25" size="50" id="Phone" value="<?php echo "$lecturer_phone_no";?>"/></td>
  </tr>

    </table>
<table width="127" border="0" align="center">
  <tr>
    <td width="60"><form id="form1" name="form1" method="post" action="">
      <input type="submit" name="update2" id="update2" value="Update" />
    </form></td>
<td width="57"><form id="form3" name="form3" method="post" action="">
      <input type="submit" name="cancel" id="cancel" value="Cancel" />
    </form></td>
  </tr>
</table>
<center>
</center>
<p class="registration">&nbsp;</p>
 
</body>
</html>

<?php
}
?>