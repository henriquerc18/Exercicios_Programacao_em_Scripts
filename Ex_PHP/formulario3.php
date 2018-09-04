<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 3 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 27/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 03 - Exercício 03 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = $_POST['txtNum1'];
			$b = $_POST['txtNum2'];
			$c = $_POST['txtNum3'];
			
			$R = pow($a + $b, 2);
			$S = pow($c + $b, 2);
			$D = ($R + $S)/2;
				echo "O resultado é $D."
		?>
	</body>
</html>

