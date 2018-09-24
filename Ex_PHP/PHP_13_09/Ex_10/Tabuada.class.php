<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 10 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Tabuada {
				
				private $numero = 0;
				
				public function Tabuada(){
				
				}
				
				public function getNumero(){
					return $this->numero;
				}
				
				public function setNumero($numero){
					$this->numero = $numero;
				}
				
				function calcularTabuada(){
					return ($this->numero * 1 . "<br>" 
						   .$this->numero * 2 . "<br>" 
						   .$this->numero * 3 . "<br>" 
						   .$this->numero * 4 . "<br>" 
						   .$this->numero * 5 . "<br>" 
						   .$this->numero * 6 . "<br>" 
						   .$this->numero * 7 . "<br>" 
						   .$this->numero * 8 . "<br>" 
						   .$this->numero * 9 . "<br>" 
						   .$this->numero * 10 . "<br>" 
						   .$this->numero * 11 . "<br>" 
						   .$this->numero * 12 . "<br>" 
						   .$this->numero * 13 . "<br>" 
						   .$this->numero * 14 . "<br>" 
						   .$this->numero * 15 . "<br>" 
						   .$this->numero * 16 . "<br>" 
						   .$this->numero * 17 . "<br>" 
						   .$this->numero * 18 . "<br>" 
						   .$this->numero * 19 . "<br>" 
						   .$this->numero * 20);
				}
			}
		?>
		
	</body>
</html>

