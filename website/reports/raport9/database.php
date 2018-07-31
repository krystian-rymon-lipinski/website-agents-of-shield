<!DOCTYPE HTML>

<html lang="pl">

<head>
	
	<title> Strona </title>
	<meta charset="utf-8" />
	
	<style>
		
		tr, th, td {	border: 1px solid black; font-size: 25px; }
	
	</style>
	
</head>

<body>

	<?php
	require("connection.php");
	
	$connection = new mysqli($host, $user, $pass, $database);
	if($connection->connect_errno != 0) {
		echo "Nie dało się połączyć z bazą danych!";
	}
	
	else {
		$sql = "SELECT * FROM people";
		
		$outcome = $connection->query($sql);
		$numberOfRecords = $outcome->num_rows;
		
		echo "<table cellspacing=\"0px\" cellpadding=\"15px\"> <tr> <th> Imię </th> <th> Nazwisko </th> <th> Data urodzenia </th> <th> Wiek </th> </tr>";
		for($i=0; $i < $numberOfRecords; $i++) {
			$values = $outcome->fetch_assoc();
			echo "<tr> <td> $values[name] </td> <td> $values[surname] </td> <td> $values[birthdate]</td> <td>$values[age] </td></tr>";
		}
		echo "</table><br/>";		
		
		$outcome->free();
		
		$connection->close();
	}
	
	?>
	
	<a href="index.html"> Wróć </a>

</body>

</html>