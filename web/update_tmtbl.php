<!-- update_tmtbl.php -->
<!-- To update detail of customer of myacc.php into database. -->
<?php
include("authenticator.php");
include("dbase.php");

extract($_POST);

$query = "UPDATE timetable SET lecturer_name = '$', lecturer_password = '$password', lecturer_email = '$email', lecturer_username = '$username', lecturer_phone_no = '$phoneNo' WHERE lecturer_id = '$id'";

$result = mysql_query($query, $conn) or die("Could not execute query in update_lctr.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='successful_lctr.php' </script>";
}
?>
