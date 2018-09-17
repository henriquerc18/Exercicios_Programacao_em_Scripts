<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 10 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Tabuada.class.php';
			
			$tabuada = new Tabuada();
			
			$tabuada->setNumero($_POST['txtNum1']);
			
			
			echo "A tabuada deste número é: ". $tabuada->calcularTabuada(). "<br>";

		?>
		
	</body>
</html>

