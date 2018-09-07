<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 10/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  06/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Numeros.class.php';
			
			$numeros = new Numeros();
			
			$numeros->setNumeros($_POST['txtNumero']);
			
			echo '<p> Nome digitado no formulário: '.$cliente->getNome().' </p>';
			?>
		
	</body>
</html>
