<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex.4 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'DoisNumeros.class.php';
			
			$doisNumeros = new DoisNumeros();
			
			$doisNumeros->setPrimeiroNumero($_POST['txtNum1']);
			$doisNumeros->setSegundoNumero($_POST['txtNum2']);
			
			
			echo $tabuada->calcularOperacao();

		?>
		
	</body>
</html>

