<!DOCTYPE HTML>
<html>
	<head>
		<title> Exemplo 1 </title>
	</head>
	<body>
		<?php
			/*$numero1 = 10;
			$numero2 = 20;
			$resultado = $numero1 + $numero2;
			echo "<h1 style='color: blue;'>Resultado = $resultado </h1>";*/
			echo "Data e hora atual: ";
			echo date ("F jS Y, h:iA");
			echo "<hr>";
			
			$mes = 8;
			$dia = 23;
			$ano = 2018;
			$resp = checkdate($mes, $dia, $ano);
			
			if($resp == 1){
				echo "A data $dia/$mes/$ano é válida!";
			}else{
				echo "A data '$dia/$mes/$ano' é INVÁLIDA!";
			}
		?>
	</body>
</html>
