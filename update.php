<!-- update.php -->
<!-- To update detail of customer of myacc.php into database. -->
<?php
include("authenticator.php");
include("dbase.php");

extract($_POST);

$query = "UPDATE customer SET password = '$password', name = '$name', gender = '$gender',
dob = '$dob', phoneNo = '$phoneNo', ok_to_email = '$status' WHERE customerid = '$id'";

$result = mysql_query($query, $conn) or die("Could not execute query in update.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='Main Page.php' </script>";
}
?>