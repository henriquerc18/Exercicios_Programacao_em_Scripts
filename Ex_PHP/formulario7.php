<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 7 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 30/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 04 - Exercício 07 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$valor_prestacao = $_POST ['txtNum1'];
			$tempo = $_POST ['txtNum2'];
			$taxa = 12;
			
			$valor_com_atraso = $valor_prestacao + ($valor_prestacao * ($taxa/100) * $tempo);
			
			echo "O valor da prestação em atraso é R$$valor_com_atraso.";			
		?>
	</body>
</html>

