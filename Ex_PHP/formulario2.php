<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Ex. 2 - Formulário PHP -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 27/08/2018 -->

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

