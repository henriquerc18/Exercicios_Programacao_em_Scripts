<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 4 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class DoisNumeros {
				
				private $primeiroNumero = 0;
				private $segundoNumero = 0;
				
				public function DoisNumeros(){
				
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
				
				function calcularOperacao(){
					$soma = ($primeiroNumero + $segundoNumero);
					return ($this->soma);
					if($this->soma > 20){
						return($this->soma + 8);
					}else if($this->soma <= 20){
						return ($this->soma - 5);
					}
				}
			}
		?>
		
	</body>
</html>