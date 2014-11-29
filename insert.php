<!-- insert.php -->
<!-- To insert details of customer of register.php into database. -->
<?php

include("dbase.php");

extract($_POST);
$query = "INSERT INTO student VALUES ('','$student_username','$student_name','$student_phone_no','$student_password','$student_email','$student_category')";
$result = mysql_query($query, $conn) or die("Could not execute query in insert.php");
if($result)
{
	echo "<script type='text/javascript'> window.location='Main Page.php' </script>";
	
}
?>