<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 10/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Fahrenheit.class.php';
			
			$fahrenheit = new Fahrenheit();
			
			$fahrenheit->setTempCelsius($_POST['txtNum1']);
			
			echo "A temperatura em graus Celsius é de: ".$calcularFahrenheit. "<br>";
		?>
		
	</body>
</html>

