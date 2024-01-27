<?php
$servername="localhost";
$username="gabi";
$password="12345";
$databasename="website_database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if ( !$database_connection ) {
	die ( "Failed connection to database: $databasename  ---  "  . mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>


<html>
	<body>
	<br><br><br>	
<?php
	$database_query="SELECT * FROM website_database.dealer";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_assoc($query_result)) {
		echo $line['id'];
?>
		<img src="/images/<?php echo $line['image']; ?>" style="max-width:300; max-height:300; width:auto; height:auto;">
		<br>
<?php
		echo $line['brand'] . '   ' .  $line['model'] . '<br>';
		echo 'Kilometers: ' . $line['mileage'] . ' || Fuel: ' . $line['fuel_type'] . ' || Year: '  . $line['year'] . '<br>';
		echo 'Price: ' . $line['price'] . ' euro' .  '<br><br>';
	}
	mysqli_close($database_connection);
?>

	</body>
</html>
