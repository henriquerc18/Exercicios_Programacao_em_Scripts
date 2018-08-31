<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 4 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 27/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 03 - Exercício 04 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = $_POST['txtNum1'];
			$b = $_POST['txtNum2'];
			$c = $_POST['txtNum3'];
			
			$delta = pow($b, 2) - 4 * $a * $c;
			
			$x1 = -($b + sqrt($delta, 2))/2 * $a;
			$x2 = -($b - sqrt($delta, 2))/2 * $a;
			
			echo "O resultado de x' é $x1.";
			echo "O resultado de x'' é $x2.";
		?>
	</body>
</html>

