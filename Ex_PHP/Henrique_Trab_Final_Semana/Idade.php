<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 10/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Idade.class.php';
			
			$idade = new Idade();
			
			$idade->setAno($_POST['txtNum1']);
			$idade->setMes($_POST['txtNum2']);
			$idade->setDia($_POST['txtNum3']);
			
			echo "A idade em dias é de: ".$idade->calcularDias(). "<br>";
		?>
		
	</body>
</html>

