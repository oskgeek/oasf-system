<!-- insert.php -->
<!-- To insert details of customer of register.php into database. -->
<?php

include("dbase.php");

extract($_POST);
$query = "INSERT INTO student VALUES('','$username', '$name','$password'','$contact,'$email')";
$result = mysql_query($query, $conn) or die("Could not execute query in profile_student.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='mainpage.php' </script>";
	
}
?>