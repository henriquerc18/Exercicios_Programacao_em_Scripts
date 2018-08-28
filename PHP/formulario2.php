<!DOCTYPE HTML>
<html>
	<head>
		<title> Aula 03 - Exercício 02 </title>
		<meta charset="utf-8" />
		<style type="text/css">
			#azul{color: blue;}
			#vermelho{color: red;}
		</style>
		
	</head>
	<body>
		<?php
			$final = $_POST['txtNumFinal'];
			$inicio = 1;
			
			while($inicio <= $final){
				if($inicio%2 == 0){
					echo "<span id='azul'> O número $inicio é par. </span> <br>";
				}else{
					echo "<span id='vermelho'> O número $inicio é ímpar. </span> <br>";
				}
				$inicio++;
			
			}
		?>
	</body>
</html>

