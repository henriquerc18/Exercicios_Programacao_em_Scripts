<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Media {
				
				private $primeiraNota = 0;
				private $segundaNota = 0;
				
				public function Media(){
				
				}
				
				public function getPrimeiraNota(){
					return $this->primeiraNota;
				}
				
				public function setPrimeiraNota($primeiraNota){
					$this->primeiraNota = $primeiraNota;
				}
				
				public function getSegundaNota(){
					return $this->segundaNota;
				}
				
				public function setSegundaNota($segundaNota){
					$this->segundaNota = $segundaNota;
				}
				
				function calcularMedia(){
					return ($this->primeiraNota + $this->segundaNota)/2;
				}
			}
		?>
		
	</body>
</html>

