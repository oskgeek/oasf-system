<!-- update_std.php -->
<!-- To update detail of customer of myacc.php into database. -->
<?php
include("authenticator.php");
include("dbase.php");

extract($_POST);

$query = "UPDATE student SET student_name = '$name', student_password = '$password', student_email = '$email', student_username = '$username', student_phone_no = '$phoneNo' WHERE student_id = '$id'";

$result = mysql_query($query, $conn) or die("Could not execute query in update_std.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='successful_std_profile.php' </script>";
}
?>
