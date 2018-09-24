<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 7 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Triangulo {
				
				private $primeiroLado = 0;
				private $segundoLado = 0;
				private $terceiroLado = 0;
				
				public function Triangulo(){
				
				}
				
				public function getPrimeiroLado(){
					return $this->primeiroLado;
				}
				
				public function setPrimeiroLado($primeiroLado){
					$this->primeiroLado = $primeiroLado;
				}
				
				public function getSegundoLado(){
					return $this->segundoLado;
				}
				
				public function setSegundoLado($segundoLado){
					$this->segundoLado = $segundoLado;
				}
				
				public function getTerceiroLado(){
					return $this->terceiroLado;
				}
				
				public function setTerceiroLado($terceiroLado){
					$this->terceiroLado = $terceiroLado;
				}
				
				function verificarClassificacao(){
					if ($this->primeiroLado != $this->segundoLado && $this->primeiroLado != $this->terceiroLado && $this->segundoLado != $this->terceiroLado){
						echo "Triângulo Escaleno";
					}else if ($this->primeiroLado == $this->segundoLado && $this->segundoLado == $this->terceiroLado){
						echo "Triangulo Equilátero";
					}else{
						echo "Triangulo Isósceles";
					}
				}
			}
		?>
		
	</body>
</html>

