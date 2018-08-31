<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 6 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 30/08/2018 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 04 - Exercício 06 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$valor_hora = $_POST ['txtNum1'];
			$horas_trabalhadas = $_POST ['txtNum2'];
			$desconto_inss = $_POST ['txtNum3'];
			
			$salario_bruto = $valor_hora * $horas_trabalhadas;
			
			$salario_liquido = $salario_bruto - ($salario_bruto * $desconto_inss);
			
			echo "O salário bruto é $salario_bruto. <br>";
			echo "O salário líquido é $salario_liquido.";
		?>
	</body>
</html>

