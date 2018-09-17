<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  10/09 - Ex. 9 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Imposto {
				
				private $nomeContribuinte;
				private $valorSalario;
				
				public function Imposto(){
				
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
				
				public function calcularSalario(){					
					$this->valorDesconto = 0;
					if($this->valorSalario<=900){						
						echo "Isento do Imposto de Renda! <br>";
					}else if($this->valorSalario >900 && $this->valorSalario<= 1800){
						$this->valorDesconto = $this->valorSalario - ($this->valorSalario * 0.15);
						echo "O valor do imposto de renda com desconto é: R$ ".$this->valorDesconto. "<br>";
					}else if($this->valorSalario > 1800){
						$this->valorDesconto = $this->valorSalario - ($this->valorSalario * 0.27);
						echo "O valor do imposto de renda com desconto é: R$ ".$this->valorDesconto;
					}
				}
			}
		?>
		
	</body>
</html>

