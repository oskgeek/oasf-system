<?php
/*
 Filename: insert_timetable.php
 Purpose: Insert timetable details.
*/
 //Start Session
 session_start();
?>
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
#font {font-size:13px;	
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="insert_timetable.php">
<?php

error_reporting(E_ALL ^ E_NOTICE);
	$db = @mysql_connect("localhost","root","");
	mysql_select_db("oasf",$db);
	
	 $Lecturer = $_REQUEST['lecturer'];
	 $Month = $_REQUEST['month'];
	 $Day = $_REQUEST['day2'];
	 $Year = $_REQUEST['year'];
	 
     $Date = $Month.$Day.$Year;
	 $Day1 = $_REQUEST['day'];
	 $Time = $_REQUEST['time'];
	 $Details = $_REQUEST['details'];
	
	$r= mysql_query("INSERT INTO timetable (lecturer_id, lecturer_name, date, day, time_id, details)
VALUES ('$LecturerID', '$Lecturer', '$Date', '$Day1', '$Time', '$Details')");




?>
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
  <li>
    <ul>
      <li><a href="#">Item 1.1</a></li>
      <li><a href="#">Item 1.2</a></li>
      <li><a href="#">Item 1.3</a></li>
    </ul>
  </li>
</ul>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table id="font" border="0" cellpadding="4" cellspacing="0" width="100%">
  
   <tr>
     <td width="35%" align="right">*<span class="select1">Lecturer:</span></td>
     <td width="65%"><select name="lecturer" id="lecturer">
       <option>&lt;select lecturer&gt;</option>
       <option value="NUR ZETY AQTAR BINTI AHMAD AZUAN">NUR ZETY AQTAR BINTI AHMAD AZUAN</option>
       <option value="RAHIWAN NAZAR BIN ROMLI">RAHIWAN NAZAR BIN ROMLI</option>
       <option value="BALSAM ABDUL JABBAR MUSTAFA">BALSAM ABDUL JABBAR MUSTAFA</option>
       <option value="QIN HONGWU">QIN HONGWU</option>
       <option value="LUHUR BAYUAJI">LUHUR BAYUAJI</option>
       <option value="FAUZIAH BINTI ZANUDDIN">FAUZIAH BINTI ZANUDDIN</option>
      </select>      <span class="select"></td>
     
   </tr>
  <tr>
    <td width="35%" align="right"><span class="select1">Date:</span></td>
    <td width="65%">
        <label for="day2"></label>
        <span class="caption">
          <select name="month">
            <option value="1">January </option>
            <option value="2">February </option>
            <option value="3">March </option>
            <option value="4">April </option>
            <option value="5">May </option>
            <option value="6">June </option>
            <option value="7">July </option>
            <option value="8">August </option>
            <option value="9">September </option>
            <option value="10">October </option>
            <option value="11">November </option>
            <option value="12">December </option>
          </select>
          <select name="day2" id="day2">
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5 </option>
            <option value="6">6 </option>
            <option value="7">7 </option>
            <option value="8">8 </option>
            <option value="9">9 </option>
            <option value="10">10 </option>
            <option value="11">11 </option>
            <option value="12">12 </option>
            <option value="13">13 </option>
            <option value="14">14 </option>
            <option value="15">15 </option>
            <option value="16">16 </option>
            <option value="17">17 </option>
            <option value="18">18 </option>
            <option value="19">19 </option>
            <option value="20">20 </option>
            <option value="21">21 </option>
            <option value="22">22 </option>
            <option value="23">23 </option>
            <option value="24">24 </option>
            <option value="25">25 </option>
            <option value="26">26 </option>
            <option value="27">27 </option>
            <option value="28">28 </option>
            <option value="29">29 </option>
            <option value="30">30 </option>
            <option value="31">31 </option>
          </select>
          <select name="year">
            <option value="2014">2014 </option>
            <option value="2015">2015 </option>
            <option value="2017">2017 </option>
            <option value="2018">2018 </option>
          </select>
          <label for="select"></label>
        </span>
    </td>
    
  
  <tr>
    <td width="35%" align="right"><span class="select1">Day:</span></td>
    <td width="65%"><select name="day" id="day">
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
    </select></td>
  </tr>
  <tr valign="top">
    <td width="35%" valign="top" align="right"><span class="select1">Time:</span></td>
    <td width="65%" valign="top"><select name="time" id="time">
      <option value="1">8.00-9.00</option>
      <option value="2">9.00-10.00</option>
      <option value="3">10.00-11.00</option>
      <option value="4">11.00-12.00</option>
      <option value="5">12.00-13.00</option>
      <option value="6">13.00-14.00</option>
      <option value="7">14.00-15.00</option>
      <option value="8">15.00-16.00</option>
      <option value="9">16.00-17.00</option>
    </select></td>
  </tr>
  <tr>
    <td width="35%" align="right"><span class="select1">Details:</span></td>
  <td>   
      <input name="details" type="text" id="details" size="30" /> 
  </td>
  </tr>
  <tr>
  <td></td>
  <td>  
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="submit" name="cancel" id="cancel" value="Cancel" />
  </td>
  </tr>
</table>
<center>
</center>

    <tr>
      <td>
      
      </td>
      <td>
        
</td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>