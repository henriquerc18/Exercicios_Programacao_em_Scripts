<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 5 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 30/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 04 - Exercício 05 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = $_POST['txtNum1'];
			$b = $_POST['txtNum2'];
			$c = $_POST['txtNum3'];
			
			$media = ($a + $b + $c)/3;
			
			echo "A média dos valores é $media.";
		?>
	</body>
</html>

