<!DOCTYPE HTML>

<html lang="pl">

<head>
	
	<title> Strona </title>
	<meta charset="utf-8" />
	<meta name="description" content="Strona internetowa opisująca " />
	<meta name="keywords" content=" słowo, klucz, kluczowe" /> 
	<meta http-equiv="X-Ua-Compatible" content="IE=edge, chrome=1" /> 
	
	<style>
		
		body {
			background-color: #303030;
			margin: 0;
			color: white;
		}
		
		header {
			width: 100%;
			text-align: center;
			font-size: 40px;
			padding: 20px 0;
			
		}
		
		nav {
			width: 25%;
			background-color: #262626;
			float: left;
		}
		
		nav > p {
			margin: 20px;
			font-size: 30px;
		}
		
		nav a {
			color: #546321;
		}
		
		nav > ol {
			
		}
		
		main {
			width: 75%;
			float: left;
			background-color: #282828;
		}
		
		main  h2 {
			margin: 10px;
			font-size: 25px;
		}
		
		
		form {
			margin: 10px;
		}
		
		
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			text-align: center;
			font-size: 16px;
			padding: 10px 0;
			
		}
	
	</style>
	
</head>


<body>

	<?php 
	include("header.php");  
	include("nav.php");  
	include("aboutme.php");
	include("footer.php");  
	
	?>
	
	
	
	
	
	
	

</body>

</html>