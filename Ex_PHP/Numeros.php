<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 10/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Numeros.class.php';
			
			$numeros = new Numeros();
			
			$numeros->setPrimeiroNumero($_POST['txtNum1']);
			$numeros->setSegundoNumero($_POST['txtNum2']);
			$numeros->setTerceiroNumero($_POST['txtNum3']);
			$numeros->setQuartoNumero($_POST['txtNum4']);
			$numeros->setQuintoNumero($_POST['txtNum5']);
			
			echo "A soma dos 5 números é: ".$calcularSoma. "<br>";
			echo "A média dos 5 números é: ".$calcularMedia. "<br>"; 
			echo "O maior número é: ".$mostrarMaiorNumero. "<br>"; 
			echo "O maior número é: ".$mostrarMenorNumero. "<br>"; 
		?>
		
	</body>
</html>

