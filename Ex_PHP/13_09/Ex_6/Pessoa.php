<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Pessoa.class.php';
			
			$pessoa = new Pessoa();
			
			$pessoa->setNumero($_POST['txtNum1']);
			
			
			echo $pessoa->verificarDivisibilidade();

		?>
		
	</body>
</html>

