<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Idade {
				
				private $ano;
				private $mes;
				private $dia;
				
				public function Idade(){
				
				}
				
				public function getAno(){
					return $this->ano;
				}
				
				public function setAno($ano){
					$this->ano = $ano;
				}
					
				public function getMes(){
					return $this->mes;
				}
				
				public function setMes($mes){
					$this->mes = $mes;
				}
				
				public function getDia(){
					return $this->dia;
				}
				
				public function setDia($dia){
					$this->dia = $dia;
				}
				
				function calcularDias(){
					return (2018 - $ano) * 365;
				}
			}
		?>
		
	</body>
</html>

