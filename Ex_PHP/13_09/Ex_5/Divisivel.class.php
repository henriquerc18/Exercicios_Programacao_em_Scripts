<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 5 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Divisivel {
				
				private $numero = 0;

				public function Divisivel(){
				
				}
				
				public function getNumero(){
					return $this->numero;
				}
				
				public function setNumero($numero){
					$this->numero = $numero;
				}
				
				function verificarDivisibilidade(){
					if($this->numero %10 == 0){
						echo "Divisível por 10!";
					}else if ($this->numero %5 == 0){
						echo "Divisível por 5!";
					}else if ($this->numero %2 == 0){
						echo "Divisível por 2!";
					}else if ($this->numero %10 != 0 && $this->numero %5 != 0 && $this->numero %2 != 0){
						echo "Não é divisível nem por 2, nem por 5 e nem por 10!";
					}						
				}
			}
		?>
		
	</body>
</html>

