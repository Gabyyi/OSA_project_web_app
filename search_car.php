<?php
$servername="localhost";
$username="user";
$password="password";
$databasename="database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if ( !$database_connection ) {
	die ("Failed connection to database: $databasename  ---  ". mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<center>
	<br><br>This is the PHP script that display the database<br><br>
<?php

	$database_query="SELECT * FROM database.dealer WHERE brand='$_POST[brand]' AND model='$_POST[model]' AND fuel_type='$_POST[fuel_type]' AND year >= '$_POST[year]' AND mileage <= '$_POST[mileage]' AND price <= '$_POST[price]' ORDER BY price ASC";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	#	FIX ME
	#if ( $database_query ) $found=1;

	#if ( $found != 1 ) echo "No car was found";

	$image=$_FILES["image"]["name"];
	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_array($query_result)) {
		#echo $line['id'];
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
	</center>
	</body>
</html>
