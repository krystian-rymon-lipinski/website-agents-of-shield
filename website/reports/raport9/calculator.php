<!DOCTYPE HTML>

<html lang="pl">

<head>
	
	<title> Strona </title>
	<meta charset="utf-8" />
	
	<style>
		body {
			background-color: #303030;
			color: white;
		}
		
		#container {
			width: 1000px;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			margin-top: 100px;
			position: relative;
		}
		
		a {
			display: block;
			width: 100px;
			padding: 20px;
			font-size: 30px;
			margin-top: 20px;
			background-color: #8965A0;
			text-decoration: none;
			color: white;
			position: absolute;
			left: calc((100% - 140px) / 2);
			
			transition: all .4s ease-in-out;
		}
		
		a:hover {
			background-color: #674398;
			color: #AAAAAA;
			transform: scale(1.01);
		}
		
	</style>
	
</head>

<body>
	<div id="container">
		<form action="calculate.php">
		
			<div id="settings">
				<p> Ilość liczb wybranych do działania:
				<select id="number" name="howManyNumbers">
					<option value="2"> 2 </option>
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5"> 5 </option>
					<option value="6"> 6 </option>
				</select> </p>
				<p> Działanie: 
				<select name="whatAction" >
					<option value="add"> Dodawanie </option>
					<option value="multiply"> Mnożenie </option>
				</select> </p>
				<br/>
				<input type="button" onclick="setInputs()" value="Potwierdź" />
				<br/><br/><br/><br/>
			</div>
			<div id="numbers"> </div>
			
			<div> <a href="index.html"> Powrót </a> </div>
			
		</form>
	</div>
	
	<script>
		
		function setInputs() {
			document.getElementById("numbers").innerHTML = "";
			var inputs = document.getElementById("number").value;
			var i = 0;
			for(i; i < inputs; i++) {
				document.getElementById("numbers").innerHTML += (i+1) + ". liczba: " +  "<input type=\"text\" id=\"field" + (i+1) + "\" name=\"number" + (i+1) + "\" /> <br/><br/>";
			}
			document.getElementById("numbers").innerHTML += "<input id=\"submit-button\" value=\"Gotowe!\" onclick=\"checkNumbers("+inputs+")\" type=\"button\" />";
			
			
		}
		
		function checkNumbers(inputs) {
			var i = 0;
			var value;
			var properInputs = true;
			for(i; i < inputs; i++) {
				value = document.getElementById("field"+(i+1)).value;
				if(isNaN(value) || value=="") {
					alert("Pole " + (i+1) + ". nie zawiera liczby!");
					properInputs = false;
					break;
				}
			}
			if(properInputs) document.getElementById("submit-button").setAttribute("type", "submit");
		}
	
	</script>
	
</body>

</html>