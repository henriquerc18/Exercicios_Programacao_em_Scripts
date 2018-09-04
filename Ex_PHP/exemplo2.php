<!DOCTYPE HTML>
<html>
	<head>
		<title> Exemplo 2 </title>
	</head>
	<body>
		<?php
			$dia = 7;
			if($dia == 1){
				echo "Segunda-feira";
			}else if($dia == 2){
				echo "Terça-feira";
			}else if($dia == 3){
				echo "Quarta-feira";
			}else if($dia == 4){
				echo "Quinta-feira";
			}else if($dia == 5){
				echo "Sexta-feira";
			}else if($dia == 6){
				echo "Sábado";
			}else if($dia == 7){
				echo "Domingo";
			}else{
				echo "Dia da semana INVÁLIDO!";
			}
		?>
	</body>
</html>
