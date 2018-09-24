<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 2 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Divisores.class.php';
			
			$divisores = new Divisores();
			
			$divisores->setNumero($_POST['txtNum1']);
			
			
			echo "Os divisores deste número são: ". $divisores->calcularDivisores(). "<br>";

		?>
		
	</body>
</html>


