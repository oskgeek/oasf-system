<?php
/*
 Filename: sessionHandler.php
 Purpose: To handle login information and create a session for that user.
*/
 //Start session
 session_start();
 
 //Validation error flag
 $errflag = false;
 
 //Input Validations
 if($_POST['username'] == ''){
	$errmsg_arr[] = 'Username missing';
	$errflag = true;
 }
 if($_POST['password'] == ''){
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
 }
 if($_POST['category'] == ''){
	$errmsg_arr[] = 'Category missing';
	$errflag = true;
 }
 //If there are input validations, redirect back to the login form
 if($errflag) 
 {
  $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
  session_write_close();
  header("location: login.php");
  exit();
 }
 
 //to make a connection with database
$conn = mysql_connect("localhost", "root")  or die(mysql_error());
 
 // to select the targeted database
 mysql_select_db("oasf", $conn) or die(mysql_error());
 
 // to create a query to be executed in sql
 
 $student_username = $_POST['username'];
 $student_password = $_POST['password'];
 $student_category = $_POST['category'];
 
 $lecturer_username = $_POST['username'];
$lecturer_password = $_POST['password'];
$lecturer_category = $_POST['category'];

$admin_username = $_POST['username'];
$admin_password = $_POST['password'];
$admin_category = $_POST['category'];

 if($_POST['category']== "Student")
 $query = "SELECT * FROM student WHERE student_username = '$student_username' AND student_password = '$student_password' AND student_category = '$student_category'";
 

else if($_POST['category']== "Lecturer")
$query = "SELECT * FROM lecturer WHERE lecturer_username = '$lecturer_username' AND lecturer_password = '$lecturer_password' AND lecturer_category ='$lecturer_category'";

else if($_POST['category']== "Admin")
$query = "SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password = '$admin_password' AND admin_category ='$admin_category'";	

 // to run sql query in database
 $result = mysql_query($query, $conn) or die(mysql_error());
 
 //Check whether the query was successful or not
 if(isset($result))
 {
	if(mysql_num_rows($result) == 1)
	{
		//Login Successful
		session_regenerate_id();
		$user= mysql_fetch_assoc($result);
		$_SESSION['SESS_USER_ID'] =$user['student_id'];
		$_SESSION['SESS_USERNAME'] = $user['student_username'];
		$_SESSION['SESS_NAME'] = $user['student_name'];
		$_SESSION['SESS_PASSWORD'] = $user['student_password'];
		$_SESSION['SESS_CONTACT'] = $user['student_phone_no'];
		$_SESSION['SESS_EMAIL'] = $user['student_email'];
		$_SESSION['SESS_CATEGORY'] = $user['student_category'];
		
		$_SESSION['STATUS'] = true;
		session_write_close();

		header("location: mainpage.php");
		exit();
		
	}

	else
	{
		//Login failed
		header("location: login-failed.html");
		$_SESSION['SESS_NAME'] = 'null';
		exit();
	}
 }
 else 
 {
  die("Query failed");
 }


 ?>