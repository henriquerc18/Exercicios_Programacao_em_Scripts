<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 7 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Triangulo.class.php';
			
			$triangulo = new Triangulo();
			
			$triangulo->setPrimeiroLado($_POST['txtNum1']);
			$triangulo->setSegundoLado($_POST['txtNum2']);
			$triangulo->setTerceiroLado($_POST['txtNum3']);
			
			
			echo $triangulo->verificarClassificacao();

		?>
		
	</body>
</html>

