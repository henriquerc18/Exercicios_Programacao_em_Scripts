<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 3 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Maior {
				
				private $primeiroNumero;
				private $segundoNumero;
				private $terceiroNumero;
				$numeroMenor = 0;
				$numeroMedio = 0;
				$numeroMaior = 0;
				
				public function Maior(){
				
				}
				
				public function getPrimeiroNumero(){
					return $this->primeiroNumero;
				}
				
				public function setPrimeiroNumero($primeiraNumero){
					$this->primeiroNumero = $primeiraNumero;
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
				
				function calcularMaiorNumero(){
					if($this->primeiroNumero > $this->segundoNumero && $this->primeiroNumero > $this->terceiroNumero){
						$numeroMaior = $primeiroNumero;
						if($this->segundoNumero > $this->terceiroNumero){
							$numeroMenor = $terceiroNumero;
							$numeroMedio = $segundoNumero;
						}else{
							$numeroMenor = $segundoNumero;
							$numeroMedio = $terceiroNumero;
						}
					}
					}else if($this->segundoNumero > $this->primeiroNumero && $this->segundoNumero > $this->terceiroNumero){
						$numeroMaior = $segundoNumero;
					}else if($this->terceiroNumero > $this->primeiroNumero && $this-terceiroNumero > $this->segundoNumero){
						$numeroMaior = $terceiroNumero;
					}
					
					return ($numeroMaior);
					echo $numeroMaior
				}
			}
		?>
		
	</body>
</html>

