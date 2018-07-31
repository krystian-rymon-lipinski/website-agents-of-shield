<!DOCTYPE HTML>

<html lang="pl">

<head>
	
	<title> Strona </title>
	<meta charset="utf-8" />
	<meta name="description" content="Opis strony" />
	<meta name="keywords" content=" słowo, klucz, kluczowe" /> 
	<meta http-equiv="X-Ua-Compatible" content="IE=edge, chrome=1" /> 
	
	<link rel="stylesheet" href="style.css" />
	
	<style> 
	
	body {
		background-color: #303030;
		color: white;
	}
	
	</style>
	
</head>


<body>
	
	<?php
	
		$string = "ninechars";
		$firstNumber = array();
		$secondNumber = array();
		$function = array();
		echo "Napis: $string <br/>";
		echo "----------------------------------------------------------------------- <br/><br/>";
		
		$loopsNumber = rand(1, 3);
		echo "Liczba pętli: $loopsNumber <br/>";
		for($i=0; $i < $loopsNumber; $i++) {
			$firstNumber[$i] = rand(1, 3);
			$secondNumber[$i] = rand(1, 3);
			$function[$i] = rand(0, 1);
			
			echo 'Pierwsza liczba: ' . $firstNumber[$i] . '<br/>'; 
			echo 'Druga liczba: ' . $secondNumber[$i] . '<br/>'; 
			if($function[$i] == 0) {
				echo "Dodawanie <br/>";
				echo 'Numer znaku w tabeli napisu: '. ($firstNumber[$i] + $secondNumber[$i] - 1) . '<br/>';
				echo 'Litera: ' . $string[$firstNumber[$i] + $secondNumber[$i] - 1] . '<br/>';
			}
			else {
				echo "Mnożenie <br/>";
				echo 'Numer znaku w tabeli napisu: '. ($firstNumber[$i] * $secondNumber[$i] - 1) . '<br/>';
				echo 'Litera: ' . $string[$firstNumber[$i] * $secondNumber[$i] - 1] . '<br/>';
			}	
			echo '<br/>';
		}
		
		echo "<br/> ------------------------------------------------- <br/><br/>";
			
		 for($i=0; $i < $loopsNumber; $i++) {
			if($function[$i] == 0) echo 'Litera: ' . $string[$firstNumber[$i] + $secondNumber[$i] - 1] . '<br/>';
			else echo 'Litera: ' . $string[$firstNumber[$i] * $secondNumber[$i] - 1] . '<br/>';
		 }
		
	?>
	
</body>

</html>