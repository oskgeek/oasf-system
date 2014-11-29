
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
	font-weight: bold;
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
#font {font-size:13px;	
}
.days {
	font-weight: bold;
}
.days {
	font-weight: bold;
}
.days {
	font-weight: bold;
}
.days {
	font-weight: bold;
}
.days {
	font-weight: bold;
}
.time {
	font-weight: bold;
}
.time {
	font-weight: bold;
}
.time {
	font-weight: bold;
}
.time {
	font-weight: bold;
}
.days {
	text-align: center;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>

<center>
<p><img src="images/logo-rasmi-ump.png" width="93" height="68" alt="logoump" /><img src="images/headerpic.gif" width="700" height="126" alt="headerpic" /></p>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#"><img src="images/page3-img3.png" width="54" height="48" align="middle" /><br />Home</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
</ul>
<ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#"><img src="images/page3-img2.png" alt="" width="54" height="48" align="center" />Schedule</a></li>
  <li><a class="MenuBarItemSubmenu" href="#"><img src="images/page3-img5.png" alt="" width="54" height="48" />Appointment</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#"><img src="images/page3-img4.png" alt="" width="54" height="48" />Records</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#"><img src="images/page3-img6.png" alt="" width="54" height="48" /><br />Profile</a>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
      </ul>
  </li>
  </ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><?php
include("dbase.php");

$query ="SELECT r.time_id,r.time, t.lecturer_id,t.details from timetable t, timerange r
where r.time_id = '1'";
$result =mysql_query($query,$conn);

while($row=mysql_fetch_array($result)){
	$lecturer_name=$row["lecturer_name"];
	$date=$row["date"];
	$day=$row["day"];
	$time_id=$row["time_id"];
	$details=$row["details"];
	?>
</p>
<ul class="MenuBarHorizontal">
  <li>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
      </ul>
  </li>
</ul>
<table width="612" border="1">
  <tr>
    <td width="95">TIME/DAY</td>
    <td width="85" class="days">MONDAY</td>
    <td width="88" class="days">TUESDAY</td>
    <td width="119" class="days">WEDNESDAY</td>
    <td width="102" class="days">THURSDAY</td>
    <td width="83" class="days">FRIDAY</td>
  </tr>
  <tr>
    <td class="time">8.00-9.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?> </td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td class="time">9.00-10.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td class="time">10.00-11.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td class="time">11.00-12.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td>12.00-13.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td>13.00-14.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td>14.00-15.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td>15.00-16.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
  <tr>
    <td>16.00-17.00</td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
    <td><?php echo $lecturer_name;?><br />Date:<?php echo $date;?> <br /> Day:<?php echo $day;?> <br /> Time:<?php echo $time_id;?> <br />Date:<?php echo $details;?></td>
  </tr>
</table>
</center>