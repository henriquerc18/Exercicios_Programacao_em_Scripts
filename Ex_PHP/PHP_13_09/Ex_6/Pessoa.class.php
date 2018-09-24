<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  13/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			class Pessoa {
				
				private $nome;
				private $sexo;
				private $idade;

				public function Pessoa(){
				
				}
				
				public function getNome(){
					return $this->nome;
				}
				
				public function setNome($nome){
					$this->nome = $nome;
				}
				
				public function getSexo(){
					return $this->sexo;
				}
				
				public function setSexo($sexo){
					$this->sexo = $sexo;
				}
				
				public function getIdade(){
					return $this->idade;
				}
				
				public function setIdade($idade){
					$this->idade = $idade;
				}
				
				function verificarAdmissao(){
					if($this->sexo == "Feminino" && $this->idade < 25 || $this->sexo == "feminino" && $this->idade < 25){
						echo "ACEITA";
					}else{
						echo "NÃO ACEITA";
					}						
				}
			}
		?>
		
	</body>
</html>

