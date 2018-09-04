<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 03/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  03/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Cliente {
				
				private $idCliente;
				private $nome;
				private $rg;
				
				public function Cliente(){
				
				}
				
				public function getIdCliente(){
					return $this->idCliente;
				}
				
				public function setIdCliente($idCliente){
					$this->idCliente = $idCliente;
				}
					
				public function getNome(){
					return $this->nome;
				}
					
				public function setNome($nome){
					$this->nome = $nome;
				}
				
				public function getRg(){
					return $this->rg;
				}
				
				public function setRg($rg){
					$this->rg = $rg;
				}
			}
			?>
		
	</body>
</html>
