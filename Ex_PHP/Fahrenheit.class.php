<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 5 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Fahrenheit {
				
				private $tempCelsius;
				
				public function Fahrenheit(){
				
				}
				
				public function getTempCelsius(){
					return $this->tempCelsius;
				}
				
				public function setTempCelsius($tempCelsius){
					$this->tempCelsius = $tempCelsius;
				}
				
				function calcularFahrenheit(){
					$tempFahrenheit = (9 * tempCelsius + 160)/5;
				}
			}
		?>
		
	</body>
</html>

