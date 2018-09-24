<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 2 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Divisores {
				
				private $numero;
				
				public function Tabuada(){
				
				}
				
				public function getNumero(){
					return $this->numero;
				}
				
				public function setNumero($numero){
					$this->numero = $numero;
				}
				
				function calcularDivisores(){
					for($div = 1; $div <= $numero; $div ++){
						if($numero%$div == 0){
							echo $div "é divisor de" .$numero;
						}
					}					
				}
			}
		?>
		
	</body>
</html>

