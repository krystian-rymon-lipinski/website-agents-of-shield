<!DOCTYPE HTML>

<html lang="pl">

<head>
	
	<title> Strona </title>
	<meta charset="utf-8" />
	
</head>

<body>

	<?php 
	
	$numbers  = array();
	$howManyNumbers = $_GET["howManyNumbers"];
	$whatAction = $_GET["whatAction"];
	
	if($whatAction=="add") $value = 0;
	else $value = 1;
	
	
	for($i=0; $i < $howManyNumbers; $i++) {
		$numbers[$i] = $_GET["number" .($i+1)];
		echo "Liczba " . ($i+1) . ".: " . $numbers[$i] . "<br/>";
		
		if($whatAction=="add") $value += $numbers[$i];
		else $value *= $numbers[$i];
		
	}
	
	if($whatAction=="add") echo "Wybrano dodawanie. Suma: " . $value;
	else echo "Wybrano mnożenie. Iloczyn: " . $value;
	
	echo "<br/><a href=\"calculator.php\"> Wróć </a>";
	
	
	
	
	
	?>
</body>


</html>