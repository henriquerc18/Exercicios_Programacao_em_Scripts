<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 1 </title>
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
					
				public function getSegundoNumero(){
					return $this->segundoNumero;
				}
				
				public function setSegundoNumero($segundoNumero){
					$this->segundoNumero = $segundoNumero;
				}
				
				public function getTerceiroNumero(){
					return $this->terceiroNumero;
				}
				
				public function setTerceiroNumero($terceiroNumero){
					$this->terceiroNumero = $terceiroNumero;
				}
				
				public function getQuartoNumero(){
					return $this->quartoNumero;
				}
				
				public function setQuartoNumero($quartoNumero){
					$this->quartoNumero = $quartoNumero;
				}
				
				public function getQuintoNumero(){
					return $this->quintoNumero;
				}
				
				public function setQuintoNumero($quintoNumero){
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

