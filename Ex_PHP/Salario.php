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
			include_once 'Salario.class.php';
			
			$salario = new Salario();
			
			$salario->setQtdHorasTrab($_POST['txtNumero1']);
			$salario->setSalarioHora($_POST['txtNumero2']);
			$salario->setNumDepend($_POST['txtNumero3']);
			
			echo "O salário bruto é " .$salario->getSalarioBruto(). "<br>";
			echo "O desconto do INSS é " .$salario->getDescontoInss(). "<br>";
			echo "O desconto do imposto de renda é " .$salario->getdescImpostoRenda(). "<br>";
			echo "O salário líquido é " .$salario->getSalarioLiquido(). "<br>";
			?>
		
	</body>
</html>
