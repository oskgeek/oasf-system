<!-- insert.php -->
<!-- To insert details of user of lectuerer_register.php into database. -->
<?php

include("dbase.php");

extract($_POST);
$query = "INSERT INTO lecturer VALUES ('','$lecturer_id','$lecturer_name','$lecturer_phone_no','$lecturer_password','$lecturer_email')";
$result = mysql_query($query, $conn) or die("Could not execute query in profile_lecturer.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='mainpage.php' </script>";
	
}
?>