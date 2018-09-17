<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 06/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  06/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Numeros {
				
				private $primeiroNumero = 0;
				private $segundoNumero = 0;
				private $terceiroNumero = 0;
				private $quartoNumero = 0;
				private $quintoNumero = 0;
				
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
					$this->segundoNumero = segundoNumero;
				}
				
				public function getTerceiroNumero(){
					return $this->terceiroNumero;
				}
				
				public function setTerceiroNumero($terceiroNumero){
					$this->terceiroNumero = terceiroNumero;
				}
				
				public function getQuartoNumero(){
					return $this->quartoNumero;
				}
				
				public function setQuartoNumero($quartoNumero){
					$this->quartoNumero = quartoNumero;
				}
				
				public function getQuintoNumero(){
					return $this->quintoNumero;
				}
				
				public function setQuintoNumero($quintoNumero){
					$this->quintoNumero = quintoNumero;
				}
				
				function calcularSoma(){
					return ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero  + $quintoNumero);
				}
				
				function calcularMedia(){
					return ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero  + $quintoNumero)/3;
				}
				
				function calcularMaiorNumero(){
					if ($this->primeiroNumero > $this->segundoNumero && $this->primeiroNumero > $this->terceiroNumero && $this->primeiroNumero > $this->quartoNumero && $this->primeiroNumero > $this->quintoNumero){
						echo "O maior número é " .$this->primeiroNumero;
					} else if ($this->segundoNumero > $this->primeiroNumero  && $this->segundoNumero > $this->terceiroNumero && $this->segundoNumero > $this->quartoNumero && $this->segundoNumero > $this->quintoNumero){;
						echo "O maior número é " .$this->segundoNumero;
					} else if ($this->terceiroNumero > $this->primeiroNumero && $this->terceiroNumero > $this->segundoNumero && $this->terceiroNumero > $this->quartoNumero && $this->terceiroNumero > $this->quintoNumero){;
						echo "O maior número é " .$this->terceiroNumero;
					} else if ($this->quartoNumero > $this->primeiroNumero && $this->quartoNumero > $this->segundoNumero && $this->quartoNumero > $this->terceiroNumero && $this->quartoNumero > $this->quintoNumero){;
						echo "O maior número é " .$this->quartoNumero;
					} else if ($this->quintoNumero > $this->primeiroNumero && $this->quintoNumero > $this->segundoNumero && $this->quintoNumero > $this->terceiroNumero && $this->quintoNumero > $this->quartoNumero){;
						echo "O maior número é " .$this->quintoNumero;
					}
				}
				
				function calcularMenorNumero(){
					if ($this->primeiroNumero < $this->segundoNumero && $this->primeiroNumero < $this->terceiroNumero && $this->primeiroNumero < $this->quartoNumero && $this->primeiroNumero < $this->quintoNumero){
						echo "O maior número é " .$this->primeiroNumero;
					} else if ($this->segundoNumero < $this->primeiroNumero  && $this->segundoNumero < $this->terceiroNumero && $this->segundoNumero < $this->quartoNumero && $this->segundoNumero < $this->quintoNumero){;
						echo "O maior número é " .$this->segundoNumero;
					} else if ($this->terceiroNumero < $this->primeiroNumero && $this->terceiroNumero < $this->segundoNumero && $this->terceiroNumero < $this->quartoNumero && $this->terceiroNumero < $this->quintoNumero){;
						echo "O maior número é " .$this->terceiroNumero;
					} else if ($this->quartoNumero < $this->primeiroNumero && $this->quartoNumero < $this->segundoNumero && $this->quartoNumero < $this->terceiroNumero && $this->quartoNumero < $this->quintoNumero){;
						echo "O maior número é " .$this->quartoNumero;
					} else if ($this->quintoNumero < $this->primeiroNumero && $this->quintoNumero < $this->segundoNumero && $this->quintoNumero < $this->terceiroNumero && $this->quintoNumero < $this->quartoNumero){;
						echo "O maior número é " .$this->quintoNumero;
					}
				}
			}
			?>
		
	</body>
</html>
