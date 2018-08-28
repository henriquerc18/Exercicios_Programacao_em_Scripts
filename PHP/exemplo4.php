<!DOCTYPE HTML>
<html>
	<head>
		<title> Exemplo 4 </title>
	</head>
	<body>
		<?php
			$nome = "José";
			$nome2 = "Silva";
			$nomes = "$nome e $nome2";
			$sexo1 = "F";
			$sexo2 = "M";
			
			if($sexo1 == "M" && $sexo2 == "M"){
				echo "$nomes - Só tem homem nessa sala de aula";
			}else if($sexo1 == "F" && $sexo2 == "F"){
				echo "$nomes - Só existe mulher nessa sala de aula";
			}else{
				echo "$nomes - Que lindo casal na sala de aula";
			}
		?>
	</body>
</html>
