<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 1 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 27/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 03 - Exercício 01 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = $_POST['txtNum1'];
			$b = $_POST['txtNum2'];
			$op = $_POST['rbOperacao'];
			
			if($op == 'soma'){
				echo "$a + $b = ", $a + $b;
			}else if($op == 'sub'){
				echo "$a - $b = ", $a - $b;
			}else if($op == 'mult'){
				echo "$a * $b = ", $a * $b;
			}else if($op == 'div'){
				echo "$a / $b = ", $a / $b;
			}
		?>
	</body>
</html>

