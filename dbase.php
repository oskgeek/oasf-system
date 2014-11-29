<!-- dbase.php -->
<!-- To connect between php scripting and database. -->
<?php



// To establish a connection to database and save in $conn
$conn = mysql_connect("localhost", "root") ;
// If connection failed then display mysql error
if (!$conn)
{
	die("Could not connect to database");
}

// To select one particular database to be used
mysql_select_db("oasf", $conn) or die("Could not open oasf database");

?>
