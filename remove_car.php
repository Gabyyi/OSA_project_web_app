<?php
$servername="localhost";
$username="gabi";
$password="12345";
$databasename="website_database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if ( !$database_connection ) {
	die ( "Failed connection to database: $databasename  ---  " . mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<br><br>This is the PHP script that delete data<br><br>
<?php
	$database_query="DELETE FROM website_database.dealer WHERE id='$_POST[id]'";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");
	
	if ( mysqli_query ) echo "Successfully removed";
       	
	mysqli_close($database_connection);
?>
	</body>
</html>
