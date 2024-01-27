<?php
$servername="localhost";
$username="$_POST[username]";
$password="$_POST[password]";
$databasename="database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if (!$database_connection) {
	die ("Failed connection to database: $databasename  ---  "  . mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>
<html>
	<head>
		<meta charset="UTF_8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dealer Admin</title>
	</head>

	<body>
		<center>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<a href="add_car.html">
				<button>Add Car</button>
			</a>
			<br><br>
			<a href="remove_car.html">
				<button>Remove Car</button>
			</a>
			<br><br>
			<a href="display_cars.php">
				<button>Display Cars</button>
			</a>
			<br>
		</center>
	</body>
</html>

