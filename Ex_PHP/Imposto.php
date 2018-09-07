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
			include_once 'Imposto.class.php';
			echo "********************";
			$imposto = new Imposto();
			
			$imposto->setNomeContribuinte($_POST['txtNome']);
			$imposto->setValorSalario($_POST['txtSalario']);
			
			echo "Nome " .$imposto->getNomeContribuinte();
			echo "Salário " .$imposto->getValorSalario();
			echo "Salário líquido => " .$imposto->calcularSalario();
		?>
		
	</body>
</html>

