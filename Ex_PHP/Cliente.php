<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 03/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>  03/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Cliente.class.php';
			
			$cliente = new Cliente();
			
			$cliente->setNome($_POST['txtNome']);
			$cliente->setRg($_POST['txtRg']);
			$cliente->setIdCliente($_POST['txtId']);
			
			echo '<p> Nome digitado no formulário: '.$cliente->getNome().' </p>';
			echo '<p> RG: '.$cliente->getRg() .'</p>';
			echo '<p> Id: '.$cliente->getIdCliente() .'</p>';
			?>
		
	</body>
</html>
