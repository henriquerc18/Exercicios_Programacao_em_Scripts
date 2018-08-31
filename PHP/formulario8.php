<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 8 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 30/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 04 - Exercício 08 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$tempo = $_POST ['txtNum1'];
			$velocidade_media = $_POST ['txtNum2'];
			$distancia = $tempo * $velocidade_media;
			$qtd_litros = $distancia/12;
			
			echo "A velocidade média foi $velocidade_media km/h. <br>";
			echo "O tempo gasto na viagem foi $tempo horas. <br>";
			echo "A distância percorrida foi $distancia km. <br>";
			echo "A quantidade de litros utilizada na viagem foi $qtd_litros litros.";		
		?>
	</body>
</html>

