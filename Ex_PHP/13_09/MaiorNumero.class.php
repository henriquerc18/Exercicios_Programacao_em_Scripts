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
				
				private $primeiroNumero = 0;
				private $segundoNumero = 0;
				private $terceiroNumero = 0;
				private $numeroMenor = 0;
				private $numeroMedio = 0;
				private $numeroMaior = 0;
				
				public function MaiorNumero(){
				
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
				
				function calcularMaiorNumero(){
					if(isset($_GET['txtNum1'])){
						$primeiroNumero = $_GET['txtNum1'];
						$segundoNumero = $_GET['txtNum2'];
						$terceiroNumero = $_GET['txtNum3'];
					if($this->primeiroNumero > $this->segundoNumero && $this->primeiroNumero > $this->terceiroNumero){
						$numeroMaior = $primeiroNumero;
						if($this->segundoNumero < $this->terceiroNumero){
							$numeroMedio = $terceiroNumero;
							$numeroMenor = $segundoNumero;
						}else{
							$numeroMedio = $segundoNumero;
							$numeroMenor = $terceiroNumero;
						}
					}
					if($this->segundoNumero > $this->primeiroNumero && $this->segundoNumero > $this->terceiroNumero){
						$numeroMaior = $segundoNumero;
						if($this->primeiroNumero < $this->terceiroNumero){
							$numeroMedio = $terceiroNumero;
							$numeroMenor = $primeiroNumero;
						}else{
							$numeroMedio = $primeiroNumero;
							$numeroMenor = $terceiroNumero;
						}
					}
					if($this->terceiroNumero > $this->primeiroNumero && $this->terceiroNumero > $this->segundoNumero){
						$numeroMaior = $terceiroNumero;
						if($this->primeiroNumero < $this->segundoNumero){
							$numeroMedio = $segundoNumero;
							$numeroMenor = $primeiroNumero;
						}else{
							$numeroMedio = $primeiroNumero;
							$numeroMenor = $segundoNumero;
						}
					}
					}
					
				}
			}
		?>
		
	</body>
</html>

