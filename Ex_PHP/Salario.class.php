<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 06/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Salario {
				
				private $qtdHorasTrab = 0;
				private $salarioHora = 0;
				private $numDepend = 0;
				
				public function Salario(){
				
				}
				
				public function getQtdHorasTrab(){
					return $this->qtdHorasTrab;
				}
				
				public function setQtdHorasTrab($qtdHorasTrab){
					$this->qtdHorasTrab = $qtdHorasTrab;
				}
				
				public function getSalarioHora(){
					return $this->salarioHora;
				}
				
				public function setSalarioHora($salarioHora){
					$this->salarioHora = salarioHora;
				}
				
				public function getNumDepend(){
					return $this->numDepend;
				}
				
				public function setNumDepend(numDepend){
					$this->numDepend = numDepend;
				}
				
				$salarioBruto = qtdHorasTrab * salarioHora + (50 * numDepend);
				$descontoInss = 0;
				if($this->salarioBruto <= 1000){
					$descontoInss = ($salarioBruto * 8.5)/100;
				} else if($this->salarioBruto > 1000){
					$descontoInss = ($salarioBruto * 9)/100;
				}
				
				$descImpostoRenda = 0;
				if($this->salarioBruto <= 500){
					$descImpostoRenda = 0;
				} else if($this->salarioBruto > 500 && $this->salarioBruto <= 1000){
					$descImpostoRenda = ($salarioBruto * 5)/100;
				} else if($this->salarioBruto > 1000){
					$descImpostoRenda = ($salarioBruto * 7)/100;
				}
				
				$salarioLiquido = $salarioBruto - $descontoInss - $descImpostoRenda;
										
			}
			?>
		
	</body>
</html>
