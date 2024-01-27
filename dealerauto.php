<?php
$servername="localhost";
$username="gabi";
$password="12345";
$databasename="website_database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);
?>

<html lang="en">
	<head>
		<meta charset="UTF_8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Vericu Autos</title>
	</head>
	<body>
	<b>Contact: </b>0777 777 777<br>
	<b>Adress: </b>Str. Vericilor<br>
	<b>Email: </b>support.contact@delear.com<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sales.contact@dealer.com<br>
	You can see our cars from Monday to Friday between 9:00 AM - 5:00 PM at Vericilor Street

	<center>
		<h1>Welcome to Vericu's Dealership</h1>
			<form action="search_car.php" method="post">
			<label for="brand">Brand:</label>
			<input type="text" name="brand" required>
			<br>
			<label for="model">Model:</label>
			<input type="text" name="model" required>
			<br>
			<label for="mileage">Mileage:</label>
			<input type="text" name="mileage" required>
			<br>
			<label for="fuel_type">Fuel Type:</label>
			<select name="fuel_type" required>
				<option value="diesel">Diesel</option>
				<option value="petrol">Petrol</option>
				<option value="plug-in">Plug-In</option>
				<option value="electric">Electric</option>
			</select>
			<br>
			<label for="year">Year:</label>
			<input type="text" name="year" required>
			<br>
			<label for="price">Price:</label>
			<input type="text" name="price" required>
			<br><br>
			<input type="submit" name="action" value="Search">
		</form>	
		<br><br>

<?php
	$database_query="SELECT * FROM website_database.dealer";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_assoc($query_result)) {
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

		<br><br>
	</center>
	</body>
</html>
