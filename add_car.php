<?php
$servername="localhost";
$username="gabi";
$password="12345";
$databasename="website_database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if (!$database_connection) {
	die ("Failed connection to database: $databasename  ---  ". mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<center>
	<br><br>This is the PHP script that add data to the database<br><br>
<?php

	$image=$_FILES["image"]["name"];
    	$folder="./Downloads/" . $image;

	$database_query="INSERT INTO website_database.dealer (id,brand,model,mileage,fuel_type,year,price,image) VALUES ( NULL , '$_POST[brand]' , '$_POST[model]' , '$_POST[mileage]' , '$_POST[fuel_type]' , '$_POST[year]' , '$_POST[price]' , '$image' )";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$database_query="SELECT * FROM website_database.dealer";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_assoc($query_result)) {
		echo $line['id'];
?>
		<img src="/images/<?php echo $line['image']; ?>" style="max-width:300; max-height:300; width:auto; height:auto;">
		<br>
<?php
		echo $line['brand'] . $line['model'] . '<br>';
		echo $line['mileage'] . $line['fuel_type'] . $line['year'] . '<br>';
		echo $line['price'] . '<br><br>';
	}
	mysqli_close($database_connection);
?>
	</center>
	</body>
</html>
