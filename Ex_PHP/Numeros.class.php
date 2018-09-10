<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<<<<<<< HEAD
<!-- Data: 06/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  06/09 - Ex. 1 </title>
=======
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 1 </title>
>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Numeros {
				
				private $primeiroNumero;
				private $segundoNumero;
				private $terceiroNumero;
				private $quartoNumero;
				private $quintoNumero;
				
				public function Numeros(){
				
				}
				
				public function getPrimeiroNumero(){
					return $this->primeiroNumero;
				}
				
				public function setPrimeiroNumero($primeiroNumero){
					$this->primeiroNumero = $primeiroNumero;
				}
<<<<<<< HEAD
				
=======
					
>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
				public function getSegundoNumero(){
					return $this->segundoNumero;
				}
				
				public function setSegundoNumero($segundoNumero){
<<<<<<< HEAD
					$this->segundoNumero = segundoNumero;
=======
					$this->segundoNumero = $segundoNumero;
>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
				}
				
				public function getTerceiroNumero(){
					return $this->terceiroNumero;
				}
				
				public function setTerceiroNumero($terceiroNumero){
<<<<<<< HEAD
					$this->terceiroNumero = terceiroNumero;
=======
					$this->terceiroNumero = $terceiroNumero;
>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
				}
				
				public function getQuartoNumero(){
					return $this->quartoNumero;
				}
				
				public function setQuartoNumero($quartoNumero){
<<<<<<< HEAD
					$this->quartoNumero = quartoNumero;
=======
					$this->quartoNumero = $quartoNumero;
>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
				}
				
				public function getQuintoNumero(){
					return $this->quintoNumero;
				}
				
				public function setQuintoNumero($quintoNumero){
<<<<<<< HEAD
					$this->quintoNumero = quintoNumero;
				}
				
				public function calcularSoma(){
					$soma = $primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero  + $quintoNumero;
					echo "A soma dos números é "$this->soma "<br>";
				}
				
				public function calcularMedia(){
					$media = ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero  + $quintoNumero)/3;
					echo "A média dos números digitados é "$this.->media "<br>";
				}
			}
			?>
		
	</body>
</html>
=======
					$this->quintoNumero = $quintoNumero;
				}
				
				function calcularSoma(){
					$soma = $primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero + $quintoNumero;
				}
				
				function calcularMedia(){
					$media = ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero + $quintoNumero)/5;
				}
				
				function mostrarMaiorNumero (){
					$maiorNumero = max ($primeiroNumero,  $segundoNumero, $terceiroNumero, $quartoNumero, $quintoNumero);
				}
				
				function mostrarMenorNumero (){
					$menorNumero = min ($primeiroNumero,  $segundoNumero, $terceiroNumero, $quartoNumero, $quintoNumero);
				}
			}
		?>
		
	</body>
</html>

>>>>>>> 222b5f720c7c1717cacadc7b8dea958a103b74ed
