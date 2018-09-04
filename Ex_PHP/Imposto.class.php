<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 03/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  03/09 - Ex. 2 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Imposto {
				
				private $nomeContribuinte;
				private $valorSalario;
				
				public Imposto(){
				
				}
				
				public function getNomeContribuinte(){
					return $this->nomeContribuinte;
				}
				
				public function setNomeContribuinte($nomeContribuinte){
					$this->nomeContribuinte = $nomeContribuinte;
				}
					
				public function getValorSalario(){
					return $this->valorSalario;
				}
				
				public function setValorSalario($valorSalario){
					$this->valorSalario = $valorSalario;
				}
				
				function calcularSalario(){
					$valorDesconto = 0;
					if($ValorSalario <= 900){
						echo "Isento do Imposto de Renda! <br>";
					}else if($valorSalario > 900 && <= 1800){
						$valorDesconto = $valorSalario - $valorSalario * 0.15;
						echo "O valor do imposto de renda com desconto é: R$ ".$valorDesconto. "<br>";
					}else if($valorSalario > 1800){
						$valorDesconto = $valorSalario - $valorSalario * 0.27;
						echo "O valor do imposto de renda com desconto é: R$ ".$valorDesconto.;
					}
				}
			}
		?>
		
	</body>
</html>

