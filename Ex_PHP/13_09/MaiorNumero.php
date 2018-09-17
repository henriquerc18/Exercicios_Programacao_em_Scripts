<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 3 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'MaiorNumero.class.php';
			
			$maiorNumero = new MaiorNumero();
			
			$maiorNumero->setPrimeiroNumero($_POST['txtNum1']);
			$maiorNumero->setSegundoNumero($_POST['txtNum2']);
			$maiorNumero->setTerceiroNumero($_POST['txtNum3']);
			
			
			echo "O maior número é: ". $maiorNumero->calcularMaiorNumero(). "<br>";
			echo $numeroMenor."<br>";
			echo $numeroMedio."<br>";
			echo $numeroMaior."<br>";

		?>
		
	</body>
</html>

